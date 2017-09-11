@extends('layouts.admin')

@section('title', 'HR Admin')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Professor</h3><hr>
                <h1><i class="fa fa-plus-circle"></i> New</h1>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item">
                <div class="col-md-4">
                    <h3>Total Professors<hr>
                    <h1><i class="fa fa-graduation-cap"></i> 869</h1><hr>
                    <p></p>
                </div>
                <div class="col-md-4 bordered">
                    <h3>Regulars<hr>
                    <h1><i class="fa fa-user-circle-o"></i> 451</h1><hr>
                    <p>54% of Total...</p>
                </div>
                <div class="col-md-4">
                    <h3>Part Timers </h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 417</h1><hr>
                    <p>46% of Total...</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Evaluation</h3><hr>
                <h1><i class="fa fa-check-circle-o"></i> Open</h1><hr>
                <button class="btn btn-danger">Notify Students</button>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item">
                <div class="col-md-4">
                    <h3>Total Professors<hr>
                    <h1><i class="fa fa-graduation-cap"></i> 869</h1><hr>
                    <p></p>
                </div>
                <div class="col-md-4 bordered">
                    <h3>Regulars<hr>
                    <h1><i class="fa fa-user-circle-o"></i> 451</h1><hr>
                    <p>54% of Total...</p>
                </div>
                <div class="col-md-4">
                    <h3>Part Timers </h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 417</h1><hr>
                    <p>46% of Total...</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection