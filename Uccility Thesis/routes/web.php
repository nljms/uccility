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
Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
Route::get('/home/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Administration Page, Super Admin - MIS, HR, Registrar, Department Head and Coordinator
Route::group(['prefix' => 'admin', 'middleware' => ['role:super admin|hr']], function() {

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/users', 'AdminController@users')->name('admin.users');
    Route::post('/users', 'UserController@store');
    Route::get('/users/{user_type}/create', 'UserController@create')->name('admin.user.create');
    Route::get('/users/{user_type}', 'UserController@displayType')->name('admin.user.type');
    Route::get('/users/{user_type}/profile/{user_id}', 'UserController@profile')->name('admin.user.profile');
    
    // Accesible for Super Admin only
    Route::get('/data', 'AdminController@data')->middleware('role:super admin')->name('admin.data');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
