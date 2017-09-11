@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Users</h3>
                <hr>
                <h1><i class="fa fa-users"></i> 3476</h1>
                <hr>
                <p>Current Overall Total of Users...</p>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item">
                <div class="col-md-4">
                    <a href="/admin/mis/users/students">
                    <h3>Students <span class="badge bg-orange">New 32</span></h3><hr>
                    <h1><i class="fa fa-graduation-cap"></i> 2259</h1><hr>
                    <p>65% of Total Users...</p></a>
                </div>
                <div class="col-md-4 bordered">
                    <h3>Professors <span class="badge bg-orange">New 13</span></h3><hr>
                    <h1><i class="fa fa-user-circle-o"></i> 869</h1><hr>
                    <p>25% of Total Users...</p>
                </div>
                <div class="col-md-4">
                    <h3>Others </h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 348</h1><hr>
                    <p>10% of Total Users...</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 content-wrapper">
            <div class="col-md-12 content-item">
            <h3>System Roles</h3>
                <div class="col-md-3">
                    <h3>Super Admin </h3><hr>
                    <h1><i class="fa fa-user-circle-o"></i> 1</h1><hr>
                    <p>Manages all the system configurations...</p>
                </div>
                <div class="col-md-3">
                    <h3>HR </h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 1</h1><hr>
                    <p>Manages the professor data...</p><br>
                </div>
                <div class="col-md-3">
                    <h3>Registrar </h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 12</h1><hr>
                    <p>Manages the students data and grades...</p>
                </div>
                <div class="col-md-3">
                    <h3>Department Head </h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 22</h1><hr>
                    <p>Manages the department...</p><br>
                </div>
                <div class="col-md-3">
                    <h3>Coordinator</h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 56</h1><hr>
                    <p>Manages the department...</p>
                </div>
                <div class="col-md-3">
                    <h3>Professor</h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 1289</h1><hr>
                    <p>Helps the department head's tasks...</p>
                </div>
                <div class="col-md-3">
                    <h3>Student Assistant</h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 341</h1><hr>
                    <p>Assist professors and coordinators for some certain tasks...</p>
                </div>
                <div class="col-md-3">
                    <h3>Student</h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 4561</h1><hr>
                    <p>Students ...</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection