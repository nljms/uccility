@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row activate-row">
        <div class="col-md-6 col-md-offset-3 activate-panel">
            <div class="panel panel-default">
                <div class="panel-heading">Activate Account</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('stud_num') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="stud_num" type="text" class="form-control" name="stud_num" value="{{ old('stud_num') }}" required autofocus>
                                @if ($errors->has('stud_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stud_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-12 control-label">Student Number</label>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-12 control-label">First Name</label>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-12 control-label">Last Name</label>
                        </div>

                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ old('first_name') }}" required>
                                @if ($errors->has('middle_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-12 control-label">Middle Name</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="container step-indicator">
                        <div class="row bs-wizard" style="border-bottom:0;"> 
                            <div class="col-xs-3 bs-wizard-step complete">
                                <div class="text-center bs-wizard-stepnum">Step 1</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Step 1</div>
                                    </div>
                                    
                                    <div class="col-xs-3 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Step 2</div>
                                    </div>
                                    
                                    <div class="col-xs-3 bs-wizard-step active">
                                    <div class="text-center bs-wizard-stepnum">Step 3</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Step 3</div>
                                    </div>
                                    
                                    <div class="col-xs-3 bs-wizard-step disabled">
                                    <div class="text-center bs-wizard-stepnum">Step 4</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Step 4</div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
