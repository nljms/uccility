<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Auth\Request;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        $login = request()->input('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$field => $login]);
        return $field;
    }

    public function authenticated()
    {
        $user = auth()->user();

        if($user->hasRole('super admin'))
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
            return redirect('/admin/department');
        }
        else if($user->hasRole('professor'))
        {
            
        }
        else if($user->hasRole('student'))
        {

        }
    
        // return redirect('/home');
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
