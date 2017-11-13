@extends('layouts.coor')

@section('title', 'Coordinator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12">
            <h1>Manage Users and User ACL</h1><hr>
            <div class="col-md-3 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Users <i class="fa fa-users"></i></h2><hr>
                    <h1>16783</h1>
                    <button class="btn btn-primary"><i class="fa fa-eye"></i> View</button>
                </div>
            </div>
            <div class="col-md-3 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Students <i class="fa fa-graduation-cap"></i></h2><hr>
                    <h1>4561</h1>
                    <button class="btn btn-primary"><i class="fa fa-eye"></i> View</button> | 
                    <button class="btn btn-primary"><i class="fa fa-eye"></i> Add</button>
                </div>
            </div>
            <div class="col-md-3 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Professors <i class="fa fa-id-badge"></i></h2><hr>
                    <h1>1231</h1>
                    <button class="btn btn-primary"><i class="fa fa-eye"></i> View</button> | 
                    <button class="btn btn-primary"><i class="fa fa-eye"></i> Add</button>
                </div>
            </div>
            <div class="col-md-3 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Other Users <i class="fa fa-user"></i></h2><hr>
                    <h1>361</h1>
                    <button class="btn btn-primary"><i class="fa fa-eye"></i> View</button> | 
                    <button class="btn btn-primary"><i class="fa fa-eye"></i> Add</button>
                </div>
            </div>
            <h1>User Access Control List</h1>
            <div class="col-md-6 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>User Roles <i class=""></i></h2><hr>
                    <div class="col-md-12">
                        <ul>
                            <li>Super Admin - MIS</li>
                            <li>HR</li>
                            <li>Registrar</li>
                            <li>Department Head</li>
                            <li>Coordinator</li>
                            <li>Professor</li>
                            <li>Student</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Permissions <i class=""></i></h2><hr>
                    <div class="col-md-12">
                        <ul>
                            <li>Super Admin - MIS</li>
                            <li>HR</li>
                            <li>Registrar</li>
                            <li>Department Head</li>
                            <li>Coordinator</li>
                            <li>Professor</li>
                            <li>Student</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection