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
                        <div class="col-xs-3 bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum active">Step 2</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot active"></a>
                            <div class="bs-wizard-info text-center active">Personal Info</div>
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
                </div>
                <div class="panel-footer">
                @include('_includes.errors')
                    <form class="form-horizontal" method="POST" action="/activate/step2">
                        {{ csrf_field() }}
    
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <textarea id="address" name="address" rows="2" cols="" class="form-control custom-fields" placeholder="Address" required autofocus></textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="address" class="col-md-12 sr-only">Address</label>
                        </div>

                        <div class="form-group{{ $errors->has('stud_num') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <textarea id="address" name="city_address" rows="2" cols="" class="form-control custom-fields" placeholder="City Address" required autofocus></textarea>
                                @if ($errors->has('stud_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stud_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="address" class="col-md-12 sr-only">City Address</label>
                        </div>
                        
                        <div class="form-group{{ $errors->has('stud_num') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="first_name" type="text" class="form-control custom-fields" name="zip_code" value="{{ old('first_name') }}" placeholder="Zip code" required>
                                @if ($errors->has('stud_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stud_num') }}</strong>
                                    </span>
                                @endif
                            </div>  
                            <label for="address" class="col-md-12 sr-only">Zipcode</label>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="first_name" type="text" class="form-control custom-fields" name="mobile_no" value="{{ old('first_name') }}" placeholder="Mobile no." required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="date-of-birth" type="date" class="form-control custom-fields" name="date_of_birth" value="{{ old('last_name') }}" placeholder="Date of Birth" required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-12 control-label" style="color: black;">Date of Birth</label>
                        </div>

                        <div class="form-group{{ $errors->has('place_of_birth') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="place-of-birth" type="text" class="form-control custom-fields" name="place_of_birth" value="{{ old('place_of_birth') }}" placeholder="Place of Birth" required>
                                @if ($errors->has('place_of_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <select id="gender" class="form-control custom-fields" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>    
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('guardian') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="guardian" type="text" class="form-control custom-fields" name="guardian" value="{{ old('guardian') }}" placeholder="Guardian" required>
                                @if ($errors->has('guardian'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('guardian') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="first_name" type="text" class="form-control custom-fields" name="contact_no" value="{{ old('first_name') }}" placeholder="Contact no." required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
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
