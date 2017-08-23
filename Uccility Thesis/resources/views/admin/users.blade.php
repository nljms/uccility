@extends('layouts.admin')

@section('title', 'Administration')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <div class="col-md-12 tbl-info">
                <div class="col-md-4">
                    <h1>Students</h1>
                </div>
                <div class="col-md-4 search-filters">
                    <select class="form-control" id="searchFilter">
                        <option value="studentNumber">Student Number</option>
                        <option value="name">Name</option>
                        <option value="course">Course</option>
                        <option value="section">Section</option>
                        <option value="campus">Campus</option>
                    </select>
                </div>
                <div class="col-md-4">
                    Description:
                    <input type="text" name="search" class="form-control">
                </div>
            </div>
            <hr>
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Student Number</td>
                        <td>Last Name</td>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Course</td>
                        <td>Year</td>
                        <td>Section</td>
                        <td>Campus</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>20140593</td>
                        <td>Loquine</td>
                        <td>Edilbert</td>
                        <td>Pantajo</td>
                        <td>BSCS</td>
                        <td>4</td>
                        <td>C</td>
                        <td>North</td>
                        <td>
                            <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>20140593</td>
                        <td>Loquine</td>
                        <td>Edilbert</td>
                        <td>Pantajo</td>
                        <td>BSCS</td>
                        <td>4</td>
                        <td>C</td>
                        <td>North</td>
                        <td>
                            <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection