@extends('layouts.coor')

@section('title', 'Coordinator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
               <div class="dropdown">
  <!--        <h3>ANNOUNCEMENTS <a href="/head/postannouncement" id="icon-size"><i class="fa fa-ellipsis-v pull-right"></i></a></h3>  -->
       <i class="fa fa-ellipsis-v pull-right dropdown-toggle" id="heyah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
    <div class="dropdown-menu pull-right" aria-labelledby="dropdownMenu4">
        <a id="spaced" class="dropdown-item" href="/head/postannouncement ">Add Student Assistant</a><br/>
        <a id="spaced" class="dropdown-item" href="/head/announcement">See all</a><br/>
    </div>
       <h1>Student Assistants</h1>
</div>
<hr/>
            <div class="col-md-12 content-row">
                <div class="col-md-12 content-item bordered-o">
                 <div class="profile_pic">
                <img src="{{asset('img/img_avatar3.png')}}" id="san" class="img-circle profile_img" alt="avatar_img">
              </div>
                    <h2>Ryan Kenth Morales <i class="fa fa-ellipsis-v pull-right"></i></h2><hr>
                    <h1>BSCS</h1><hr>
                   <h5><span class="fa fa-phone"></span> +63998779768</h5>
                    <a><h5><span class="fa fa-envelope"></span> jodie89@gmail.com</h5></a>
                    <br/><br/>
                   <div class="row">
                  <div class="col-md-7">
                 </div>

                  <div class="btn-group" >
                <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-user left"></i>
               <span>View Profile</span>
                       </a>
                        <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-commenting-o left"></i>
               <span>Message</span>
                       </a>
                </div>
                  </div>
                </div>
            </div>
             <div class="col-md-12 content-row">
                <div class="col-md-12 content-item bordered-o">
                 <div class="profile_pic">
                <img src="{{asset('img/img_avatar5.png')}}" id="san" class="img-circle profile_img" alt="avatar_img">
              </div>
                    <h2>Danna Madonna <i class="fa fa-ellipsis-v pull-right"></i></h2><hr>
                    <h1>BSIS</h1><hr>
                    <h5><span class="fa fa-phone"></span> +63998779768</h5>
                     <a><h5><span class="fa fa-envelope"></span> jodie89@gmail.com</h5></a>
                  <br/><br/>
                 <div class="row">
                  <div class="col-md-7">
                 </div>

                  <div class="btn-group" >
                <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-user left"></i>
               <span>View Profile</span>
                       </a>
                        <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-commenting-o left"></i>
               <span>Message</span>
                       </a>
                </div>
                  </div>
                </div>
            </div>
            <br/>
              <div class="col-md-12 content-row">
                <div class="col-md-12 content-item bordered-o">
                 <div class="profile_pic">
                <img src="{{asset('img/img_avatar2.png')}}" id="san" class="img-circle profile_img" alt="avatar_img">
              </div>
                    <h2>Nick Okasla <i class="fa fa-ellipsis-v pull-right"></i></h2><hr>
                    <h1>BSIT</h1><hr>
                    <h5><span class="fa fa-phone"></span> +63998779768</h5>
                     <a><h5><span class="fa fa-envelope"></span> jodie89@gmail.com</h5></a>
                    <br/><br/>
                <div class="row">
                  <div class="col-md-7">
                 </div>

                  <div class="btn-group" >
                <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-user left"></i>
               <span>View Profile</span>
                       </a>
                        <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-commenting-o left"></i>
               <span>Message</span>
                       </a>
                </div>
                  </div>
                </div>
            </div>
             <br/>
              <div class="col-md-12 content-row">
                <div class="col-md-12 content-item bordered-o">
                 <div class="profile_pic">
                <img src="{{asset('img/img_avatar6.png')}}" id="san" class="img-circle profile_img" alt="avatar_img">
              </div>
                    <h2>Maria Santa Monica<i class="fa fa-ellipsis-v pull-right"></i></h2><hr>
                    <h1>BSEMC</h1><hr>
                    <h5><span class="fa fa-phone"></span> +63998779768</h5>
                     <a><h5><span class="fa fa-envelope"></span> jodie89@gmail.com</h5></a>
                  <br/><br/>
                 <div class="row">
                  <div class="col-md-7">
                 </div>

                  <div class="btn-group" >
                <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-user left"></i>
               <span>View Profile</span>
                       </a>
                        <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-commenting-o left"></i>
               <span>Message</span>
                       </a>
                </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
    @stop
