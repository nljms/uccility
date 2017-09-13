@extends('layouts.admin')

@section('title', 'HR Admin')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-row">
            <div class="col-md-12 content-item"><br>
            <p>Showing 20 of 1361...</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>User ID</td>
                            <td>Last name</td>
                            <td>First name</td>
                            <td>Middle name</td>
                            <td>Department</td>
                            <td>Employment Status</td>
                            <td>Campus</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($professors as $professor)
                        <tr>
                            <td>{{ $professor->id }}</td>
                            <td>{{ $professor->user_id }}</td>
                            <td>{{ $professor->user->last_name }}</td>
                            <td>{{ $professor->user->first_name }}</td>
                            <td>{{ $professor->user->middle_name }}</td>
                            <td>{{ $professor->department->description }}</td>
                            <td>{{ $professor->employment_status }}</td>
                            <td>{{ $professor->campus }}</td>
                            <td><button class="btn btn-info"><i class="fa fa-eye"></i></button> &nbsp;<button class="btn btn-info"><i class="fa fa-pencil"></i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection