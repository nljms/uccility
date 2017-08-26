@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 content-panel"></div>
        <div class="col-md-3 login-panel">
            <div class="panel panel-default panel-login-holder">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <div class="col-md-12 uccility-logo">
                        <!-- <span class="icon-uccility"></span> -->
                        <img src="{{asset('img/uccility_logo.png')}}" class="img-responsive uccility_login_logo" alt="uccility_logo"/>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control login-form-control" name="email" placeholder="email address" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control login-form-control" name="password" placeholder="password" required>

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
