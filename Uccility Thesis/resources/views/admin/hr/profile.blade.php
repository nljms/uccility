@extends('layouts.admin')

@section('title', $professor->user->last_name.', '.$professor->user->first_name.' '.$professor->user->middle_name)

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>Over All Profile <i class="fa fa-ellipsis-v pull-right"></i></h1><hr>
            <div class="row">
                <div class="col-md-3 profile-pic">
                    <img src="{{ asset('storage/avatar/'.$professor->user->photo) }}" alt="profile_picture" class="img-thumbnail img-responsive user-profile-pic">
                </div>
                <div class="col-md-9 profile-info" >
                    <h2 class="header" >Personal Details</h2>
                    <div class="row">
                        <div class="col-md-4"><p class="info-title">Full Name</p>
                        <p>{{ $professor->user->last_name }}, {{ $professor->user->first_name }} {{ $professor->user->middle_name }} {{ $professor->user->extension_name }}</p>
                    </div>
                    <div class="col-md-5"> 
                        <p class="info-title">Employment Status</p>
                        <p>{{ $professor->employment_status }}</p>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-4"> 
                    <p class="info-title">Department</p>
                    <p>{{ $professor->department->description }}</p>
                </div>
                <div class="col-md-2"> 
                    <p class="info-title">Campus</p>
                    <p>{{ $professor->campus }}</p>       
                </div>
            </div><hr>  
                <div class="row">
                    <div class="col-md-9">
                        <p class="info-title">Home Address</p>
                        <p>Blk 11 Excess Lot Bukid Area Bagumbong North Caloocan City</p>
                    </div>
                    <div class="col-md-3">
                        <p class="info-title">City Address</p>
                        <p>Caloocan City</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"> 
                        <p class="info-title">Gender</p>
                        <p>{{ $professor->user->gender }}</p>
                    </div>
                    <div class="col-md-5">
                         <p class="info-title">Email</p>
                        <p>{{ $professor->user->email }}</p>
                    </div>
                    <div class="col-md-2"> 
                        <p class="info-title">Phone</p>
                        <p>{{ $professor->user->mobile_no }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"> 
                        <p class="info-title">Date of Birth</p>
                        <p>{{ $professor->user->date_of_birth }}</p>
                    </div>
                    <div class="col-md-4">
                         <p class="info-title">Place of Birth</p>
                        <p>{{ $professor->user->place_of_birth }}</p>
                    </div>
                </div>                
            </div>
        </div>       
    </div>
</div>

@endsection