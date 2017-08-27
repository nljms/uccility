@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    PROFILE
                </div>
                @role('super admin')
                    <p>You are a Super Admin</p>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
