@extends('layouts.coor')

@section('title', 'Coordinator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>Master List</h1>
            <br/>
            <table class="table table-striped">
            <thead >
              <tr>
                <th>Student Number</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Status</th>
                <th>GWA</th>
                <th>Semester</th>
                <th>School Year</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @for($var = 0; $var < 8;$var++)
              <tr>
                <td>20140512</td>
                <td>Morales Ryan Kenth</td>
                <td>Male</td>
                <td>Regular</td>
                <td>2.25</td>
                <td>2nd Sem</td>
                <td>2017-2018</td>
                <td>
                <a href=""><i class="fa fa-file-excel-o" id="forcol" aria-hidden="true"></i></a>
                &nbsp;&nbsp;
                <a href=""><i class="fa fa-download" id="forcol" aria-hidden="true"></i></a>
                </td>
              </tr>
              @endfor
              </tbody>
            </table>
        </div>
    </div>
</div>
    @stop
