<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email\ActivationComplete;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Session;
use App\User;
use App\Student;

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
            'last_name' => 'required|min: 2',
            'first_name' => 'required',
            'middle_name' => 'required',
            'course' => 'required',
            'year' => 'required',
            'section' => 'required',
        ]);
        
        $server_data = DB::table('enrollment_data')->where([
            ['student_number', '=', $request->student_number],
            ['last_name', 'like', '%'.$request->last_name.'%'],
            ['first_name', 'like', '%'.$request->first_name.'%'],
            ['middle_name', 'like', '%'.$request->middle_name.'%'],
            ['course', '=', $request->course],
            ['year', '=', $request->year],
            ['section', '=', $request->section]
        ])->get();

        if(count($server_data) > 0)
        {
            $request->session()->put([
                'student_number' => $request->student_number,
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'extension_name' => $request->extension_name,
                'program' => $request->course,
                'year' => $request->year,
                'section' => $request->section,
                'campus' => $request->campus
            ]);
            return redirect('/activate/step2');
        }
        else
        {
            $err = "user not found";
            return redirect()->back()->withInput()->with('err', $err);
        }
        // return $request->all();
        
    }

    public function step2()
    {
        return view('activations.step2');
    }
    
    public function step2Store(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|min: 2',
            'city_address' => 'required|min: 2',
            'zip_code' => 'required|number',
            'mobile_no' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'guardian' => 'required',
            'contact_no' => 'required'
        ]);

        $request->session()->put([
            'address' => $request->address,
            'city_address' => $request->city_address,
            'zip_code' => $request->zip_code,
            'mobile_no' => $request->mobile_no,
            'date_of_birth' => $request->date_of_birth,
            'place_of_birth' => $request->place_of_birth,
            'gender' => $request->gender,
            'civil_status' => $request->civil_status,
            'guardian' => $request->guardian,
            'contact_no' => $request->contact_no,
        ]);
        // return $request->session()->all();
        return redirect('/activate/step3');
    }

    public function step3()
    {
        return view('activations.step3');
    }

    public function step3Store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'username' => 'required|min: 6',
            'password' => 'required|min: 6|confirmed'
        ]);
        
        $request->session()->put([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password
        ]);
        $session = $request->session();
        $user_id = User::create([
            'last_name' => $session->get('last_name'),
            'first_name' => $session->get('first_name'),
            'middle_name' => $session->get('middle_name'),
            'extension_name' => $session->get('extension_name'),
            'gender' => $session->get('gender'),
            'civil_status' => $session->get('civil_status'),
            'date_of_birth' => $session->get('date_of_birth'),
            'place_of_birth' => $session->get('place_of_birth'),
            'email' => $session->get('email'),
            'mobile_no' => $session->get('mobile_no'),
            'current_address' => $session->get('address'),
            'permanent_address' => $session->get('address'),
            'photo' => $session->get('photo'),
            'username' => $session->get('username'),
            'password' => $session->get('password')
        ])->id;

        $request->request->add([
            'user_id' => $user_id,
            'status' => 'Regular'
        ]);
        
        $student = Student::create([
            'user_id' => $request->user_id,
            'student_number' => $session->get('student_number'),
            'program' => $session->get('program'),
            'year' => $session->get('year'),
            'section' => $session->get('section'),
            'campus' => $session->get('campus'),
            'status' => $request->status
        ]);

        $user = User::find($user_id);

        Mail::to($user)->send(new \App\Mail\ActivationComplete($user));
        return redirect('/activate/confirmation/');
        // return $request->session()->get('student_number');

    }

    public function confirmation()
    {
        return view('activations.confirmation');
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
