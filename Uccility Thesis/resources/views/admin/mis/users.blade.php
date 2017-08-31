@extends('layouts.admin')

@section('title', 'Administration')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-8 content-item">
            <h1>Users</h1><hr>
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <td>User ID</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Campus</td>
                        <td>Activated</td>
                    </tr>
                </thead>
                <tbody>
                @for($i = 1; $i <= 20; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>Edilbert Loquine</td>
                        <td>Student</td>
                        <td>North</td>
                        <td>No</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="content-item">
                
            </div>
        </div>
    </div>
</div>

@endsection