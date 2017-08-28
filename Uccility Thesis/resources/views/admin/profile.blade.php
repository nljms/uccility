@extends('layouts.admin')

@section('title', 'Administration')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>Loquine, Edilbert Pantajo <i class="fa fa-ellipsis-v pull-right"></i></h1><hr>
            <div class="col-md-3 personal-info">
                <div class="profile-pic">
                    <img src="{{asset('img/img_avatar3.png')}}" alt="profile_picture" class="img-thumbnail img-responsive user-profile-pic">
                </div>
                <div class="profile-info">
                    <p class="info-title id">Student</p>
                    <p class="info-title id">User ID: 1</p>
                    <p class="info-title id">Student #: 20140593</p>
                    <hr>
                    <p class="info-title">Course</p>
                    <p>Bachelor of Science in Computer Science</p>
                    <p class="info-title">Year and Section</p>
                    <p>4th - C</p>
                    <p class="info-title">Campus</p>
                    <p>Congressional</p>
                    <hr>
                    <p class="info-title">Address</p>
                    <p>Blk 11 Lot 2 North Triangle Cielito Homes Camarin Caloocan City</p>
                    <p class="info-title">Email</p>
                    <p>e.loquine00@gmail.com</p>
                    <p class="info-title">Phone</p>
                    <p>+639434921921</p>
                </div>
            </div>
            <div class="col-md-9 profile-data">
                <h2 class="header">Academic Stats</h2>
                <div class="col-md-12 grade-graph">
                    <canvas id="linechart-gwa"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection