@extends('layouts.admin')

@section('title', 'Professor Evaluation - September 2017')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item bordered-o">
                <!-- <h3><i class="fa fa-ellipsis-v pull-right"></i></h3> -->
                <div class="col-md-6">
                    <h3>Summary</h3>
                    <canvas id="piechart-users"></canvas><br>
                    <p>20% Outstanding</p>
                    <p>33% Above Average</p>
                    <p>27% Average</p>
                    <p>15% Fair</p>
                    <p>5% Poor</p>
                </div>
                <div class="col-md-6">
                    <h3>Results</h3>
                    <table class="table table-responsive table-striped">
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Galanga, Mary Grace</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Monzales, Neil James</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Morales, Ryan Kenth</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Loquine, Edilbert</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Barrios, Joemen</td>
                            </tr>
                            <tr>
                                <td colspan="2"><button class="btn btn-primary btn-o"><i class="fa fa-eye"></i> View all...</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item bordered-o">
                <h3><i class="fa fa-gear"></i> Settings</h3><hr>
                <p>Questionnaire</p>
                <button class="btn btn-primary btn-o"><i class="fa fa-pencil"></i> Edit</button>
                <h3>Notify Students</h3><hr>
                <button class="btn btn-primary btn-o"><i class="fa fa-exclamation"></i> Notify</button>
            </div>
        </div>
        <div class="col-md-6 content-row">
            <div class="col-md-12 content-item bordered-o">
                <h3>Questionnaire</h3><hr>
                <h1><i class="fa fa-pencil"></i> Edit</h1><hr>
                <h3>Notify Students</h3><hr>
                <button class="btn btn-primary btn-o"><i class="fa fa-exclamation"></i> Notify</button>
            </div>
        </div>
    </div>
</div>

@endsection