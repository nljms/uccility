<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Page Info, Guest View
Route::get('/', function () {
    return view('guest.index');
});
Route::get('/about');
Route::get('/features');
Route::get('/contact');

Auth::routes();

// Users Page, Student and Professor
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Administration Page, MIS, Coordinator and HR
Route::prefix('admin')->group(function() {
    // Temp
    // Route::get('/users', 'AdminController@users')->name('admin.login');
    // Temp
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/users', 'AdminController@users')->name('admin.users');
    Route::get('/users/students', 'AdminController@type')->name('admin.type');
    Route::get('/data', 'AdminController@data')->name('admin.data');

    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

