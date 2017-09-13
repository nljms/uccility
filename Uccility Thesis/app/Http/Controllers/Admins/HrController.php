<?php

namespace App\Http\Controllers\Admins;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Department;
use App\Professor;

class HrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.hr.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.hr.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Server side validations
        $this->validate($request, [
            'last_name' => 'required|min:2',
            'first_name' => 'required|min:2',
            'gender' => 'required',
            'civil_status' => 'required'
        ]);

        $image = $request->img[0]->hashName();
        $request->request->add(['photo' => $image]);
        
        $user = User::create(request(['last_name', 'first_name', 'middle_name', 'extension_name', 'gender', 'civil_status', 'date_of_birth', 'place_of_birth', 'email', 'mobile_no', 'current_address', 'permanent_address', 'photo', 'username', 'password']))->id;
        
        $request->request->add(['user_id' => $user]);
        
        $professor = Professor::create(request(['department_id', 'user_id', 'employment_status', 'campus']));
        
        $filename = $request->img[0]->store('public/avatar');
        
        // return $request->all();
        
        return redirect('admin/hr/professors');
    }

    public function showProfessors()
    {
        // $professors = DB::table('users')->join('professors', 'users.id', '=', 'professors.user_id')->select('users.*', 'professors.*')->get();
        $professors = Professor::all();
        return view('admin.hr.professors', compact('professors'));
    }

    public function showEvaluations()
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $professor = Professor::find($user_id);
        return view('admin.hr.profile', compact('professor'));
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
