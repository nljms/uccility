@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-wrapper">
            <div class="col-md-12 content-item">
                <h1>News and Announcements <i class="fa fa-newspaper-o"></i> <i class="fa fa-ellipsis-v pull-right"></i></h1><hr>
                <div class="col-md-8">
                    <div class="col-md-2" style="text-align: center;">
                        <img src="{{asset('img/img_avatar3.png')}}" alt="profile_picture" class="img-thumbnail img-responsive img-circle" style="height:58px;">
                    </div>
                    <form method="POST" action="/admin/mis/news-and-announcements">
                        {{ csrf_field() }}
                        <div class="col-md-10">
                            <input type="text" name="news_header" class="form-control" style="color: black; font-size: 22px;" placeholder="Title" /><br>
                            <textarea name="news_description" rows="3" cols="1" class="form-control" style="color: black; font-size: 22px;" placeholder="Description"></textarea><br>
                            <button class="btn btn-danger" type="submit">Post</button> &nbsp;<span class="news-logo">Files <i class="fa fa-file"></i> Images <i class="fa fa-image"></i></span><i class="fa fa-caret-down pull-right"></i>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h1>Some News</h1>
                    <h4>September 31, 2017 - Registrar</h4>
                    <h3>Professors should submit their grading sheets within the 1st week of september, Thanks.</h3>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h1>Some News</h1>
                    <h4>September 31, 2017 - Registrar</h4>
                    <h3>Professors should submit their grading sheets within the 1st week of september, Thanks.</h3>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h1>Some News</h1>
                    <h4>September 31, 2017 - Registrar</h4>
                    <h3>Professors should submit their grading sheets within the 1st week of september, Thanks.</h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection