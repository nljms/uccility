<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email\ActivationComplete;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Session;
use App\User;
use App\Student;
use App\Role;

class ActivateAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function step1()
    {
        return view('activations.step1');
    }

    public function step1Store(Request $request)
    {
        $this->validate($request, [
            'student_number' => 'required|min: 2',
            'email' => 'required|email',
        ]);

        $query = [
            ['student_number', '=', $request->student_number]
        ];

        $server_data = DB::table('enrollment_data')->where($query)->get();

        if(count($server_data) > 0)
        {
            $isExisting = DB::table('students')->where('student_number', '=', $request->student_number)->get();
            
            if(count($isExisting) > 0)
            {
                $err = "Sorry this student is already activated his/her account, Please contact the Site Admin or the MIS for more Information.";
                return redirect()->back()->withInput()->with('err', $err);
            }
            else
            {
                $request->session()->put([
                    'student_number' => $request->student_number,
                    'email' => $request->email,
                ]);
                return redirect('/activate/step2');
            }
        }
        else
        {
            $err = "Sorry we couldn't find the student you tried to activate, Please contact the Site Admin or the MIS for more Information.";
            return redirect()->back()->withInput()->with('err', $err);
        }
        // return bcrypt(session()->getId());
    }

    public function step2()
    {
        if(session()->get('student_number') && session()->get('email'))
        {
            return view('activations.step2');
        }
        else
        {
            return redirect()->back();
        }
    }
    
    public function step2Store(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|min: 2',
            'city_address' => 'required|min: 2',
            'zip_code' => 'required',
            'mobile_no' => 'required',
            'date_of_birth' => 'required',
            'place_of_birth' => 'required',
            'gender' => 'required',
            'guardian' => 'required',
            'contact_no' => 'required'
        ]);

        session()->put([
            'address' => $request->address,
            'city_address' => $request->city_address,
            'zip_code' => $request->zip_code,
            'mobile_no' => $request->mobile_no,
            'date_of_birth' => $request->date_of_birth,
            'place_of_birth' => $request->place_of_birth,
            'gender' => $request->gender,
            'guardian' => $request->guardian,
            'contact_no' => $request->contact_no,
        ]);

        return redirect('/activate/step3');
    }

    public function step3()
    {
        if(session()->get('student_number') && session()->get('email'))
        {
            return view('activations.step3');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function step3Store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min: 6',
            'password' => 'required|min: 6|confirmed'
        ]);
        
        session()->put([
            'username' => $request->username,
            'password' => $request->password
        ]);

        $data = DB::table('enrollment_data')->where('student_number', '=', session()->get('student_number'))->get();
        
        $confirmation_code = str_random(50);

        DB::table('activations')->insert(['session_id' => session()->getId(), 'email' => session()->get('email'), 'token' => $confirmation_code]);

        try {
            Mail::to(session()->get('email'))->send(new \App\Mail\ActivationComplete($data, $confirmation_code));
        }
        catch(Exception $e)
        {
            return $e;
        }

        $request->session()->flash('status', 'completed');

        return redirect('/activate/step3/');
    }

    public function step3Token($token)
    {
        return redirect('/activate/step3/{{token}}');
    }

    public function confirmation($token)
    {
        if(session()->get('student_number') && session()->get('email'))
        {
            $data = DB::table('activations')->where([
                ['email', '=', session()->get('email')],
                ['token', '=', $token]
            ]);

            if(count($data) > 0)
            {
                $enrollment_data = DB::table('enrollment_data')->where('student_number', '=', session()->get('student_number'))->get();

                $user_id = User::create([
                    'last_name' => $enrollment_data[0]->last_name,
                    'first_name' => $enrollment_data[0]->first_name,
                    'middle_name' => $enrollment_data[0]->middle_name,
                    'gender' => session()->get('gender'),
                    'date_of_birth' => session()->get('date_of_birth'),
                    'place_of_birth' => session()->get('place_of_birth'),
                    'email' => session()->get('email'),
                    'mobile_no' => session()->get('mobile_no'),
                    'current_address' => session()->get('address'),
                    'permanent_address' => session()->get('city_address'),
                    'username' => session()->get('username'),
                    'password' => session()->get('password')
                ])->id;

                $student = Student::create([
                    'user_id' => $user_id,
                    'student_number' => session()->get('student_number'),
                    'program' => $enrollment_data[0]->course,
                    'year' => $enrollment_data[0]->year,
                    'section' => $enrollment_data[0]->section,
                    'campus' => $enrollment_data[0]->location,
                    'status' => 'Regular'
                ]);

                $role = Role::find(5);
                $user = User::find($user_id);
                $user->attachRole($role);
                $message = 'Congratulations, You are now Activated!';
                session()->flush();
            }
            else
            {
                $message = 'Oops Something went wrong :( Please try again';
            }
            return view('activations.confirmation', compact('message'));
            // dd(session());
        }
        else
        {
            return redirect()->back();
        }
    }

    public function isCompleted($user)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
