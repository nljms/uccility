<?php

use App\User;

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

// Route::get('/users', function(){
//     return User::all();
// });

Auth::routes();

Route::group(['prefix' => 'activate'], function(){
    Route::get('/', 'ActivateAccountController@step1')->name('activate.step1');
    Route::get('/step1', 'ActivateAccountController@step1')->name('activate.step1');
    Route::post('/step1', 'ActivateAccountController@step1Store');
    Route::get('/step2', 'ActivateAccountController@step2')->name('activate.step2');
    Route::post('/step2', 'ActivateAccountController@step2Store');
    Route::get('/step3', 'ActivateAccountController@step3')->name('activate.step3');
    Route::post('/step3', 'ActivateAccountController@step3Store');
    // Route::get('activate/step3/{token}', 'ActivateAccountController@step3Token');
    Route::get('/confirmation/{token}', 'ActivateAccountController@confirmation')->name('activate.confirmation');
});

Route::get('/list', 'SampleController@index')->name('list');

// Users Page, Student and Professor
Route::get('/professor', function(){
    return view('professor.dashboard');
});

Route::get('/student', function(){
    return view('professor.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
Route::get('/home/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Administration Page, Super Admin - MIS, HR, Registrar, Department Head, Coordinator and Student Assistant
Route::group(['prefix' => 'admin', 'middleware' => ['role:super admin|hr|registrar|department head|coordinator|assistant coordinator|student assistant']], function() {

    // Redirect Admins to their respective pages
    Route::get('/', 'Admins\AdminController@index')->name('admin.index');

    // Super Admin(MIS)
    Route::group(['prefix' => 'mis', 'middleware' => ['role:super admin']], function(){
        Route::get('/', 'Admins\MisController@index')->name('dashboard');
        Route::get('/news-and-announcements', 'Admins\MisController@newsAnnounce')->name('registrar.news-announcements');
        Route::post('/news-and-announcements', 'Admins\MisController@postAnnouncement');
        Route::get('/messaging', 'Admins\MisController@messaging')->name('registrar.messaging');
        Route::get('/analytics', 'Admins\MisController@showAnalytics')->name('mis.analytics');
        Route::get('/augmented-reality', 'Admins\MisController@showAr')->name('mis.ar');
        Route::get('/2d-mapping', 'Admins\MisController@showMapping')->name('ar.mapping');
        Route::get('/users', 'Admins\MisController@users')->name('mis.users');
        Route::get('/users/students', 'Admins\MisController@showUserType')->name('mis.users.type');
        Route::get('/users/students/profile/1', 'Admins\MisController@showUserTypeProfile')->name('mis.users.type');
    });

    // HR
    Route::group(['prefix' => 'hr','middleware' => ['role:hr']], function(){
        Route::get('/', 'Admins\HrController@index')->name('hr.dashboard');
        Route::get('/create', 'Admins\HrController@create')->name('hr.create');
        Route::post('/create', 'Admins\HrController@store');
        Route::get('/professors', 'Admins\HrController@showProfessors')->name('hr.professors');
        Route::get('/professors/profile/{user_id}', 'Admins\HrController@show')->name('hr.profile');
        Route::get('/evaluations', 'Admins\HrController@showEvaluations')->name('hr.evaluations');

    });

    // Registrar
    Route::group(['prefix' => 'registrar', 'middleware' => ['role:registrar']], function(){
        Route::get('/', 'Admins\RegistrarController@index')->name('registrar.dashboard');
        Route::get('/professors/1', function() {
            return view('admin.registrar.user-profile');
        });
        Route::get('/professors', 'Admins\RegistrarController@showProfessors');
        Route::get('/records', 'Admins\RegistrarController@showRecords')->name('registrar.records');
        Route::get('/records/college-of-liberal-arts-and-sciences', 'Admins\RegistrarController@showCourses')->name('registrar.courses');
        Route::get('/records/college-of-liberal-arts-and-sciences/bscs', 'Admins\RegistrarController@showStudents')->name('registrar.students');
        Route::get('/records/college-of-liberal-arts-and-sciences/bscs/profile/1', 'Admins\RegistrarController@showProfile')->name('registrar.profile');
        Route::get('/records/college-of-liberal-arts-and-sciences/bscs/profile/1/grading-sheet', 'Admins\RegistrarController@showGradingSheet')->name('registrar.grading-sheet');
    });

    // Department Head
    Route::group(['prefix' => 'department-head', 'middleware' => ['role:department head']], function(){
        Route::get('/', 'Admins\DepartmentHeadController@index')->name('deparmenthead.dashboard');
        Route::get('/profile', 'Admins\DepartmentHeadController@showProfile')->name('deparmenthead.profile');
        Route::get('/scheduling', 'Admins\DepartmentHeadController@scheduling')->name('deparmenthead.scheduling');
        Route::get('/coordinators', 'Admins\DepartmentHeadController@showCoordinators')->name('deparmenthead.coordinators');
        Route::get('/coordinators/profile', 'Admins\DepartmentHeadController@showCoordinators')->name('deparmenthead.coordinators');
        Route::get('/student-assistants', 'Admins\DepartmentHeadController@showStudentAssistant')->name('deparmenthead.student-assistant');
    }); 

    // Coordinator
    Route::group(['prefix' => 'coordinator', 'middleware' => ['role:coordinator']], function(){
        Route::get('/', 'Admins\CoordinatorController@index')->name('coordinator.dashboard');

    });

    // Assistant Coordinator
    Route::group(['prefix' => 'assistant-coordinator', 'middleware' => ['role:assistant coordinator']], function(){
        Route::get('/', 'Admins\AssistantCoordinatorController@index')->name('coordinator.dashboard');

    });

    // Student Assistant
    Route::group(['prefix' => 'student-assistant', 'middleware' => ['role:student assistant']], function(){
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
