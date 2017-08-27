@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                @role('super admin')
                    <p>You are a Super Admin</p>
                @endrole

                @role('professor')
                    <p>You are a Professor</p>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
