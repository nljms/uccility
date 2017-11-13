@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>List of  Instructors</h1><hr>
              @foreach($query as $row)
            <div class="col-md-6 content-row">
                <div class="col-md-12 content-item bordered-o">
                 <div class="profile_pic">
                <img src="{{asset('img/avatar.png')}}" id="san" class="img-circle profile_img" alt="avatar_img">
              </div>

                    <h3>{{$row->fname.",  ".$row->sname." ".$row->mname}} <i class="fa fa-ellipsis-v pull-right"></i></h3><hr>
                      <h1>FULL TIME</h1>
                    <div class="row">
                      <div class="col-md-4"></div>
                       <div class="col-md-8">
                   <h5><span class="fa fa-phone"></span> +63{{$row->phone_num}}</h5>
                    <a><h5><span class="fa fa-envelope"></span> {{$row->email_add}}</h5></a>
                  </div>
             </div>
                    <br/><br/>
                   <div class="row">
                  <div class="col-md-2">
                 </div>
                  <div class="btn-group" >
                <a class="btn mads" href="/head/coor/profile">
                 <i class="fa fa-user left"></i>
               <span>View Profile</span>
                       </a>
                        <a class="btn mads" href="/head/prof/message">
                 <i class="fa fa-commenting-o left"></i>
               <span>Message</span>
                       </a>
                </div>
                  </div>
                </div>
            </div>
            @endforeach()
             <br/>
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
