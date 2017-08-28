@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-item">
            <h1>Add Professor</h1><hr>
            <form method="POST" action="/user" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-3 form-group">
                    <label for="image">Image</label>
                    <div class="img-holder">
                        <img src="/img/img_avatar3.png" id="img-preview" class="user-img img-thumbnail img-responsive">
                    </div>
                    <input type="file" name="photo[]" class="file">
                    <div class="input-group col-xs-12">
                        <span class="input-group-addon"><i class="fa fa-image"></i></span>
                        <input type="text" class="form-control input-md" disabled placeholder="Upload Image" id="image" accept="image/*">
                        <span class="input-group-btn">
                            <button id="browse" class="browse btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection