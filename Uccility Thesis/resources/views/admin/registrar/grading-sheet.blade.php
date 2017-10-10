@extends('layouts.admin')

@section('title', 'Grading Sheet')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-row">
            <div class="col-md-12 content-item">
                <h1>Loquine, Edilbert Pantajo <i class="fa fa-ellipsis-v pull-right"></i></h1><hr>
                <button class="btn btn-primary btn-o"><i class="fa fa-pencil"></i> Edit</button>
                <button class="btn btn-primary btn-o"><i class="fa fa-file"></i> Create Excel File</button>
                <button class="btn btn-primary btn-o"><i class="fa fa-print"></i> Print</button>
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr style="font-weight: bold;">
                            <td>S.Y. 2014-2015</td>
                            <td>First Year</td>
                            <td colspan="2">Section: C</td>
                        </tr>
                        <tr>
                            <td>Subj Code</td>
                            <td>Subj Description</td>
                            <td>Units</td>
                            <td>Grades</td>
                        </tr>
                        <tr>
                            <td>CS 112</td>
                            <td>Intro to Graphics</td>
                            <td>5</td>
                            <td>1.5</td>
                        </tr>
                        <tr>
                            <td>CS 113</td>
                            <td>Intro to Hardware</td>
                            <td>5</td>
                            <td>1.25</td>
                        </tr>
                        <tr>
                            <td>CS 114</td>
                            <td>Intro to Database</td>
                            <td>5</td>
                            <td>1.5</td>
                        </tr>
                        <tr>
                            <td>CS 115</td>
                            <td>Intro to Web Dev</td>
                            <td>5</td>
                            <td>1.75</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td>20</td>
                            <td>Average: 1.5</td>
                        </tr><hr>

                        <tr style="font-weight: bold;">
                            <td>S.Y. 2014-2015</td>
                            <td>Second Year</td>
                            <td colspan="2">Section: C</td>
                        </tr>
                        <tr>
                            <td>Subj Code</td>
                            <td>Subj Description</td>
                            <td>Units</td>
                            <td>Grades</td>
                        </tr>
                        <tr>
                            <td>CS 112</td>
                            <td>Intro to Graphics</td>
                            <td>5</td>
                            <td>1.5</td>
                        </tr>
                        <tr>
                            <td>CS 113</td>
                            <td>Intro to Hardware</td>
                            <td>5</td>
                            <td>1.25</td>
                        </tr>
                        <tr>
                            <td>CS 114</td>
                            <td>Intro to Database</td>
                            <td>5</td>
                            <td>1.5</td>
                        </tr>
                        <tr>
                            <td>CS 115</td>
                            <td>Intro to Web Dev</td>
                            <td>5</td>
                            <td>1.75</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td>20</td>
                            <td>Average: 1.5</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection