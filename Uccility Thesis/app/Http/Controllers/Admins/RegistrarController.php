<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Professor;
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

    public function showGradingSheet()
    {
        return view('admin.registrar.grading-sheet');
    }

    public function showProfessors()
    {
        $professors = Professor::all();
        return view('admin.registrar.professors', compact('professors'));
    }
}
