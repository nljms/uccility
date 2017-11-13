@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row activate-row">
        <div class="col-md-5 col-md-offset-4 activate-panel">
            <div class="panel panel-default">
                <div class="panel-heading">Activate Account</div>
                <div class="panel-body">
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
                                
                            <div class="col-xs-3 bs-wizard-step complete">
                                <div class="text-center bs-wizard-stepnum">Step 3</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot done"></a>
                                <div class="bs-wizard-info text-center">Credentials</div>
                            </div>

                            <div class="col-xs-3 bs-wizard-step active">
                                <div class="text-center bs-wizard-stepnum active">Step 4</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot active"></a>
                                <div class="bs-wizard-info text-center active">Complete</div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="panel-footer">
                @include('_includes.errors')
                    <form class="form-horizontal" method="POST" action="/activate/step3">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2" style="text-align: center;">
                                <h3 style="color: #28365e">{{ $message }}</h3>
                            </div>        
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2" style="text-align: center;">
                                <button type="submit" class="btn btn-primary btn-o">
                                    Click here to Login
                                </button>
                            </div>
                        </div>
                    </form>    
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
