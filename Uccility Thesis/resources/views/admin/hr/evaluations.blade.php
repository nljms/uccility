@extends('layouts.admin')

@section('title', 'Professor Evaluation')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item bordered-o">
                <h3>Questionnaire</h3><hr>
                <h1><i class="fa fa-pencil"></i> Edit</h1><hr>
                <h3>Notify Students</h3><hr>
                <button class="btn btn-primary btn-o"><i class="fa fa-exclamation"></i> Notify</button>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item bordered-o">
                <h3><i class="fa fa-ellipsis-v pull-right"></i></h3>
                <div class="col-md-6">
                    <h3>Summary</h3>
                    <canvas id="piechart-users"></canvas><br>
                    <p>Passed: 12023 | Average: 3812 | Failed: 761</p>
                </div>
                <div class="col-md-6">
                    <h3>Top Performing Professors</h3>
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
                                <td colspan="2"><i class="fa fa-eye"></i> View...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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