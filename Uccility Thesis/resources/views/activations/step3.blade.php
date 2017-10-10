@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row activate-row">
        <div class="col-md-5 col-md-offset-4 activate-panel">
            <div class="panel panel-default">
                <div class="panel-heading">Activate Account</div>
                <div class="panel-body">
                @include('_includes.errors')
                    <form class="form-horizontal" method="POST" action="/activate/step3">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="email" type="text" class="form-control custom-fields" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-12 control-label sr-only">Student Number</label>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="username" type="text" class="form-control custom-fields" name="username" value="{{ old('username') }}" placeholder="Username" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="username" class="col-md-12 control-label sr-only">Username</label>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="password" type="password" class="form-control custom-fields" name="password" value="{{ old('password') }}" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password" class="col-md-12 control-label sr-only">Password</label>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmationd') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="password-confirmation" type="password" class="form-control custom-fields" name="password_confirmation" value="{{ old('confirm_password') }}" placeholder="Confirm password" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password-confirmation" class="col-md-12 control-label sr-only">Confirm Password</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary btn-o">
                                    Proceed
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
                                    <a href="#" class="bs-wizard-dot done"></a>
                                    <div class="bs-wizard-info text-center"> Primary Info</div>
                                </div>
                                    
                                <div class="col-xs-3 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot done"></a>
                                    <div class="bs-wizard-info text-center">Personal Info</div>
                                </div>
                                    
                                <div class="col-xs-3 bs-wizard-step active">
                                    <div class="text-center bs-wizard-stepnum active">Step 3</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot active"></a>
                                    <div class="bs-wizard-info text-center active">Credentials</div>
                                </div>

                                <div class="col-xs-3 bs-wizard-step">
                                    <div class="text-center bs-wizard-stepnum">Step 4</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Complete</div>
                                </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        if($('.guest-body').length){
            $(".guest-body").addClass('blur');
        }
    });
</script>
@endsection
