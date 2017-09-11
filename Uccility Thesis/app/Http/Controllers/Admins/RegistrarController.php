<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.registrar.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showRecords()
    {
        $colleges = ['College of Liberal Arts and Sciences', 'College of Business and Accountancy', 'College of Education', 'College of Law', 'Graduate School'];
        return view('admin.registrar.records', compact('colleges'));
    }

    public function showCourses()
    {
        $courses = ['BS Computer Science', 'BS Information System', 'BS Information System', 'BS Entertainment and Multimedia Computing', 'BS Mathematics','BS Psychology','BS Criminology','Bachelor of Public Administration','Bachelor of Public Administration (SPECIAL PROGRAM)','AB Communication', 'AB Political Science','AB Behavioral Science'];
        return view('admin.registrar.courses', compact('courses'));
    }

    public function showStudents()
    {
        return view('admin.registrar.students');
    }

    public function showProfile()
    {
        return view('admin.registrar.user-profile');
    }

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
