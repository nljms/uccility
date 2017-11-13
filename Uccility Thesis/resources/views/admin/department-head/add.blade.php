@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
     <div class="dropdown">
  <!--        <h3>ANNOUNCEMENTS <a href="/head/postannouncement" id="icon-size"><i class="fa fa-ellipsis-v pull-right"></i></a></h3>  -->
       <i class="fa fa-ellipsis-v pull-right dropdown-toggle" id="heyah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
    <div class="dropdown-menu pull-right" aria-labelledby="dropdownMenu4">
        <a id="spaced" class="dropdown-item" href="/head/coor/add ">Add Coordinator</a><br/>
        <a id="spaced" class="dropdown-item" href="/head/coor">See all</a><br/>
    </div>
       <h3>COORDINATORS</h3>
</div>
<hr/>

          @foreach($result as $row)
              <div class="col-md-12 content-row">
                <div class="col-md-12 content-item bordered-o">
                 <div class="profile_pic">
                <img src="{{asset('img/avatar.png')}}" id="san" class="img-circle profile_img" alt="avatar_img">
              </div>
                    <h2>{{$row->sname.", ".$row->fname." ".$row->mname." ".$row->initial}} <i class="fa fa-ellipsis-v pull-right"></i></h2><hr>
                    <h1>{{$row->deg_name}}</h1><hr>
                    <h5><span class="fa fa-phone"></span>{{" ".$row->phone_num}}</h5>
                     <a><h5><span class="fa fa-envelope"></span>{{" ".$row->email_add }}</h5></a>
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
            @endforeach
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript">
  $('.collapse').collapse();

</script>
</html>
    @stop






