@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <!-- <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Notify Professors</h3><hr>
                <button class="btn btn-primary"><i class="fa fa-exclamation-triangle"></i> Send Notifications</button>
            </div>
        </div>
        <div class="col-md-9 content-row">
            <div class="col-md-12 content-item">
                <canvas id="line-chart" class="charts"></canvas>
            </div>
        </div> -->
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Professors</h3>
                <hr>
                <h1><i class="fa fa-user-o"></i> 3476</h1>
                <button class="btn btn-warning"><i class="fa fa-exclamation-triangle"></i> Notify Professors</button>
                <hr>
                <p>Current Overall Total of Professors...</p>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item">
            <h3>Grading Sheets <i class="fa fa-file"></i> <i class="fa fa-ellipsis-v pull-right"></i> <span class="date-identifier"><p>S.Y. 2017 - 2018 2nd Semester</p></span></h3>
                <div class="col-md-6">
                    <h3>Received <span class="badge bg-orange">New 32</span></h3><hr>
                    <h1><i class="fa fa-upload"></i> 65%</h1><hr>
                    <p>1312 Submitted Grading Sheets...</p>
                </div>
                <div class="col-md-6">
                    <h3>Unreceived</h3><hr>
                    <h1><i class="fa fa-download"></i> 35%</h1><hr>
                    <p>1871 Not Submitted...</p>
                </div>
                <div class="col-md-12">
                    <h3>Recent</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>Name</td>
                            <td>Department</td>
                            <td>Date</td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Monzales, Neil James</td>
                                <td>Computer Studies Department</td>
                                <td>Sept. 1, 2017</td>
                            </tr>
                            <tr>
                                <td>Morales, Ryan Kenth</td>
                                <td>Computer Studies Department</td>
                                <td>Sept. 1, 2017</td>
                            </tr>
                            <tr>
                                <td>Galaga, Mary Grace</td>
                                <td>Computer Studies Department</td>
                                <td>Sept. 1, 2017</td>
                            </tr>
                            <tr>
                                <td>Olazo, Krizia Mae</td>
                                <td>Computer Studies Department</td>
                                <td>Sept. 1, 2017</td>
                            </tr>
                            <tr>
                                <td>Isog, Aeron</td>
                                <td>Computer Studies Department</td>
                                <td>Sept. 1, 2017</td>
                            </tr>
                        
                            <tr>
                                <td colspan="3">Click to View more...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Students</h3>
                <hr>
                <h1><i class="fa fa-graduation-cap"></i> 7516</h1><hr>
                <p>Current Overall Total of Professors...</p>
            </div>
        </div> -->
    </div>
</div>

@endsection