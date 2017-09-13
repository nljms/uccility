@extends('layouts.admin')

@section('title', 'HR Admin')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-row">
            <div class="col-md-12 content-item">
                <h2>Personal Information</h2><hr>
                @include('_includes.errors')
                <form method="POST" action="create" class="professor_form" id="professor_form" enctype="multipart/form-data">
                {{ csrf_field() }} 
                    <div class="col-md-4 form-group">
                        <label for="image">Image</label>
                        <div class="img-holder">
                            <img src="/img/img_avatar3.png" id="img-preview" class="user-img img-thumbnail img-responsive">
                        </div><br>
                        <input type="file" name="img[]" class="file">
                        <div class="input-group col-md-8">
                            <span class="input-group-addon"><i class="fa fa-image"></i></span>
                            <input type="text" class="form-control input-md" disabled placeholder="Upload Image" id="image" accept="image/*">
                            <span class="input-group-btn">
                                <button id="browse" class="browse btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="last_name">Last name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Last name" class="form-control" autofocus required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="first_name">First name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="First name" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="middle_name">Middle name</label>
                        <input type="text" name="middle_name" id="middle_name" placeholder="Middle name" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="extension">Extension name</label>
                        <select name="extension_name" id="extension" class="form-control">
                            <option value=""></option>
                            <option value="Jr">Jr</option>
                            <option value="Sr">Sr</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="employment">Extension name</label>
                        <select name="employment_status" id="employment" class="form-control">
                            <option value="Part time">Part time</option>
                            <option value="Regular">Regular</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="department">Department</label>
                        <select name="department_id" id="department" class="form-control">
                            <option value=""></option>
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{ $department->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="campus">Campus</label>
                        <select name="campus" id="campus" class="form-control">
                            <option value=""></option>
                            <option value="Camarin">Camarin</option>
                            <option value="Congress">Congress</option>
                            <option value="Main">Main</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="date_of_birth">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="place_name">Place of Birth</label>
                        <input type="text" name="place_of_birth" id="place_of_birth" placeholder="Place of Birth" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="civil_status">Civil Status</label>
                        <select name="civil_status" id="civil_status" class="form-control" required>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="" for="residential">Current Address</label>
                        <textarea name="current_address" id="residential" rows="2" cols="" class="form-control"></textarea>    
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="" for="permanent">Permanent Address</label>
                        <textarea name="permanent_address" id="permanent" rows="2" cols="" class="form-control"></textarea>    
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="mobile_no">Mobile No.</label>
                        <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile No." class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" required>
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="" for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>

                    <div class="col-md-4 col-md-offset-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection