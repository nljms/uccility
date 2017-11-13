@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row activate-row">
        <div class="col-md-5 col-md-offset-4 activate-panel" style="margin-top: 100px;">
            <div class="panel panel-default activation">
                <div class="panel-heading">Activate Account</div>
                    <div class="container step-indicator">
                        <div class="row bs-wizard" style="border-bottom:0;"> 
                            <div class="col-xs-3 bs-wizard-step">
                                <div class="text-center bs-wizard-stepnum active">Step 1</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot active"></a>
                                <div class="bs-wizard-info text-center active"> Primary Info</div>
                            </div>
                                    
                            <div class="col-xs-3 bs-wizard-step">
                                <div class="text-center bs-wizard-stepnum">Step 2</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a>
                                <div class="bs-wizard-info text-center">Personal Info</div>
                            </div>
                                
                            <div class="col-xs-3 bs-wizard-step">
                                <div class="text-center bs-wizard-stepnum">Step 3</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a>
                                <div class="bs-wizard-info text-center">Credentials</div>
                            </div>

                            <div class="col-xs-3 bs-wizard-step">
                                <div class="text-center bs-wizard-stepnum">Step 4</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a>
                                <div class="bs-wizard-info text-center">Complete</div>
                            </div>
                        </div>
                    </div>
                <div class="panel-footer">
                <div class="panel-body">
                    @include('_includes.errors')
                    @if(session()->has('err'))
                    <div class="col-md-12 alert alert-danger">
                        <p>{{ session()->get('err') }}</p>
                    </div>
                    @endif
                        <form class="form-horizontal" method="POST" action="/activate/step1">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('student_number') ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <input id="student-number" type="text" class="form-control custom-fields" name="student_number" value="{{ old('student_number') }}" placeholder="Student number" required autofocus>
                                    @if ($errors->has('student_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('student_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="name" class="col-md-12 control-label sr-only">Student Number</label>
                            </div>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <input id="email" type="email" class="form-control custom-fields" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="name" class="col-md-12 control-label sr-only">Email</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2 activation-btn">
                                    <button type="submit" class="btn btn-primary btn-o">
                                        Proceed
                                    </button>
                                </div>
                            </div>
                        </form>
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
