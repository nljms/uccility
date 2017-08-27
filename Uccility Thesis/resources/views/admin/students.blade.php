@extends('layouts.admin')

@section('title', 'Administration')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <div class="col-md-12 tbl-info">
                <h1>Students</h1>
            </div>
            <hr>
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <td>User ID</td>
                        <td>Student Number</td>
                        <td>Last Name</td>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Course</td>
                        <td>Year</td>
                        <td>Section</td>
                        <td>Campus</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="students/1">1</a></td>
                        <td>20140593</td>
                        <td>Loquine</td>
                        <td>Edilbert</td>
                        <td>Pantajo</td>
                        <td>BSCS</td>
                        <td>4</td>
                        <td>C</td>
                        <td>North</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>20140593</td>
                        <td>Loquine</td>
                        <td>Edilbert</td>
                        <td>Pantajo</td>
                        <td>BSCS</td>
                        <td>4</td>
                        <td>C</td>
                        <td>North</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>20140593</td>
                        <td>Loquine</td>
                        <td>Edilbert</td>
                        <td>Pantajo</td>
                        <td>BSCS</td>
                        <td>4</td>
                        <td>C</td>
                        <td>North</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection