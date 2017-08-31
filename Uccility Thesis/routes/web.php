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

Auth::routes();

Route::get('/list', 'SampleController@index')->name('list');

// Users Page, Student and Professor
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
Route::get('/home/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Administration Page, Super Admin - MIS, HR, Registrar, Department Head, Coordinator and Student Assistant
Route::group(['prefix' => 'admin', 'middleware' => ['role:super admin|hr|registrar']], function() {

    // Redirect Admins to their respective pages
    Route::get('/', 'Admins\AdminController@index')->name('admin.index');

    // Super Admin(MIS)
    Route::group(['prefix' => 'mis', 'middleware' => ['role:super admin']], function(){
        Route::get('/', 'Admins\MisController@index')->name('mis.dashboard');
        Route::get('/users', 'Admins\MisController@users')->name('mis.users');
    });

    // HR
    Route::group(['prefix' => 'hr','middleware' => ['role:hr']], function(){
        Route::get('/', 'Admins\HrController@index')->name('hr.dashboard');
    });

    // Registrar
    Route::group(['prefix' => 'registrar', 'middleware' => ['role:registrar']], function(){
        Route::get('/', 'Admins\RegistrarController@index')->name('registrar.dashboard');
    });

    // Department Head
    Route::group(['prefix' => 'department', 'middleware' => ['role:department head|coordinator']], function(){
        Route::get('/', 'Admins\DepartmentHeadController@index')->name('deparmenthead.dashboard');
    }); 

    // Coordinator
    Route::group(['prefix' => 'department', 'middleware' => ['role:coordinator']], function(){
        Route::get('/', 'Admins\CoordinatorController@index')->name('coordinator.dashboard');
    });

    // Student Assistant
    Route::group(['prefix' => 'student.assistant', 'middleware' => ['role:student assistant']], function(){
        Route::get('/', 'Admins\StudentAssistantController@index')->name('studentassistant.dashboard');
    });

    // Route::post('/users', 'UserController@store');
    // Route::get('/users/{user_type}/create', 'UserController@create')->name('admin.user.create');
    // Route::get('/users/{user_type}', 'UserController@displayType')->name('admin.user.type');
    // Route::get('/users/{user_type}/profile/{user_id}', 'UserController@profile')->name('admin.user.profile');
    
    // 
    // Route::get('/data', 'Admins\AdminController@data')->middleware('role:super admin|hr')->name('admin.data');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
