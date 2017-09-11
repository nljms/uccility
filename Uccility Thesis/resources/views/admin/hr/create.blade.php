@extends('layouts.admin')

@section('title', 'HR Admin')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-row">
            <div class="col-md-12 content-item">
                <h2>Personal Information</h2><hr>
                @include('_includes.errors')
                <form method="POST" action="create" class="professor_form" id="professor_form">
                {{ csrf_field() }} 
                    <div class="col-md-4 form-group">
                        <div class="img-holder">
                            
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
                        <select name="extension" id="extension" class="form-control">
                            <option value=""></option>
                            <option value="Jr">Jr</option>
                            <option value="Sr">Sr</option>
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
                        <label class="" for="civil_status">Gender</label>
                        <select name="civil_status" id="civil_status" class="form-control" required>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <label class="" for="height">Height(m)</label>
                        <input type="number" name="height" id="height" placeholder="m" class="form-control" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label class="" for="weight">Weight(kg)</label>
                        <input type="number" name="weight" id="weight" placeholder="kg" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="blood_type">Blood Type</label>
                        <select name="blood_type" id="blood_type" class="form-control" required>
                            <option value="O -">O -</option>
                            <option value="O +">O +</option>
                            <option value="A -">A -</option>
                            <option value="A +">A +</option>
                            <option value="B -">B -</option>
                            <option value="B +">B +</option>
                            <option value="AB -">AB -</option>
                            <option value="AB +">AB +</option>
                        </select>
                    </div>

                    <div class="col-md-12 form-group">
                        <label class="" for="residential">Residential Address</label>
                        <textarea name="residential" id="residential" rows="2" cols="" class="form-control"></textarea>    
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="" for="permanent">Permanent Address</label>
                        <textarea name="permanent" id="permanent" rows="2" cols="" class="form-control"></textarea>    
                    </div>
                    <div class="col-md-4 form-group">
                    <label class="" for="telephone_no">Telephone No.</label>
                        <input type="text" name="telehone_no" id="telephone_no" placeholder="Telephone No." class="form-control" autofocus required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="mobile_no">Mobile No.</label>
                        <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile No." class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="" for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" required>
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