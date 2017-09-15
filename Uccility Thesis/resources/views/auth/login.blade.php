@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 content-panel" style="padding: 0px;">
            <img src="{{ asset('img/ucc.jpg') }}" alt="" style="width: 1012px; padding:0px;">
        </div>
        <div class="col-md-3 login-panel pull-right" style="position: relative;">
            <div class="panel panel-default panel-login-holder">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <div class="col-md-12 uccility-logo">
                        <!-- <span class="icon-uccility"></span> -->
                        <img src="{{asset('img/uccility_logo.png')}}" class="img-responsive uccility_login_logo" alt="uccility_logo"/>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="text" class="form-control login-form-control custom-fields" name="login" placeholder="email address or username" value="{{ old('login') }}" required autofocus>

                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control login-form-control custom-fields" name="password" placeholder="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <div class="checkbox remember">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary col-md-8  col-md-offset-2">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
