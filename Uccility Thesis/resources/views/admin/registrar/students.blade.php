@extends('layouts.admin')

@section('title', 'Student List')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-row">
            <div class="col-md-12 content-item">
                <h2>BS Computer Science Students</h2>
                <p>Showing 10 of 3561</p><hr>
                <table class="table table-striped">
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
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1;$i <=10 ;$i++)
                        <tr>
                            <td><a href="/admin/registrar/records/college-of-liberal-arts-and-sciences/bscs/profile/1"> {{ $i }} </a></td>
                            <td>20{{ rand(100000, 199999) }}</td>
                            <td>Doe</td>
                            <td>Loyd</td>
                            <td>John</td>
                            <td>BSCS</td>
                            <td>4</td>
                            <td>C</td>
                            <td>North</td>
                            <td>Regular</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection