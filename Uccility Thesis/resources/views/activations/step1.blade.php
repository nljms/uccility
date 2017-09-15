@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row activate-row">
        <div class="col-md-5 col-md-offset-4 activate-panel">
            <div class="panel panel-default activation">
                <div class="panel-heading">Activate Account</div>
                <div class="panel-body">
                @include('_includes.errors')
                @if(session()->has('err'))
                <div class="col-md-12 alert alert-danger">
                    <p>We can't find a user with that information, or you may contact the MIS for more info.</p>
                </div>
                @endif
                    <form class="form-horizontal" method="POST" action="/activate/step1">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('student_number') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="student_number" type="text" class="form-control custom-fields" name="student_number" value="{{ old('student_number') }}" placeholder="Student number" required autofocus>
                                @if ($errors->has('student_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('student_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-12 control-label sr-only">Student Number</label>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="first_name" type="text" class="form-control custom-fields" name="first_name" value="{{ old('first_name') }}" placeholder="First name" required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-12 control-label sr-only">First Name</label>
                        </div>

                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="middle_name" type="text" class="form-control custom-fields" name="middle_name" value="{{ old('first_name') }}" placeholder="Middle name" required>
                                @if ($errors->has('middle_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-12 control-label sr-only">Middle Name</label>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="last_name" type="text" class="form-control custom-fields" name="last_name" value="{{ old('last_name') }}" placeholder="Last name" required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-12 control-label sr-only">Last Name</label>
                        </div>


                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <select id="extension-name" class="form-control custom-fields" name="extension_name">
                                    <option value=""></option>
                                    <option value="Jr">Jr</option>
                                    <option value="Sr">Sr</option>
                                </select>    
                                @if ($errors->has('middle_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('extension_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="extension-name" class="col-md-12 control-label">Extension name (if any)</label>
                        </div>

                        <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <select id="course" class="form-control custom-fields" name="course">
                                    <option value=""></option>
                                    <option value="BSCS">BSCS</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="BSIT">BSIS</option>
                                    <option value="BSIT">BSEMC</option>
                                </select>   
                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="course" class="col-md-12 control-label">Course</label>
                        </div>

                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <select id="year" class="form-control custom-fields" name="year">
                                    <option value=""></option>
                                    <option value="4th">4th</option>
                                    <option value="3rd">3rd</option>
                                    <option value="2nd">2nd</option>
                                    <option value="1st">1st</option>
                                </select>   
                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="year" class="col-md-12 control-label">Year</label>
                        </div>

                        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <select id="section" class="form-control custom-fields" name="section">
                                    <option value=""></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="D">E</option>
                                    <option value="D">F</option>
                                </select>   
                                @if ($errors->has('section'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="section" class="col-md-12 control-label">Section</label>
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <select id="location" class="form-control custom-fields" name="campus">
                                    <option value=""></option>
                                    <option value="A">Camarin</option>
                                    <option value="B">Congress</option>
                                    <option value="C">Main</option>
                                </select>   
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="section" class="col-md-12 control-label">Campus</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Proceed
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
