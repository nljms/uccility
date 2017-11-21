<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response    
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function redirect()
    {
        $user = auth()->user();
        
        if(auth()->guest())
        {
            return redirect('/');
        }
        else if($user->hasRole('super admin'))
        {
            return redirect('/admin/mis');
        }
        else if($user->hasRole('hr'))
        {
            return redirect('/admin/hr');            
        }
        else if($user->hasRole('registrar'))
        {
            return redirect('/admin/registrar');            
        }
        else if($user->hasRole('department head'))
        {
            return redirect('/admin/department-head');            
        }
        else if($user->hasRole('coordinator'))
        {
            return redirect('/admin/coordinator');            
        }
        else if($user->hasRole('professor'))
        {
            // return redirect('/dashboard');            
        }
        else if($user->hasRole('student'))
        {
            return redirect('/');            
        }
    }

    public function displayType()
    {
        return auth()->user()->roles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create($user_type)
    {
        if($user_type == 'student')
        {
            return view('users.studentForm');
        }
        else if($user_type == 'professor')
        {
            return view('users.professorForm');
        }
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
