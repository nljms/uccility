@extends('layouts.student')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <h1>Welcome {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!</h1>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <button class="btn-o" style="color: white; padding: 10px; font-size: 20px;">Click Here to Download the App!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
