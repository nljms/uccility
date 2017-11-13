@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
    <div class="col-md-12 contents">
       <div class="col-md-12 content-row">
         <div class="col-md-12 content-item">
         <div class="dropdown">
  <!--        <h3>ANNOUNCEMENTS <a href="/head/postannouncement" id="icon-size"><i class="fa fa-ellipsis-v pull-right"></i></a></h3>  -->
       <h3>ANNOUNCEMENTS </h3><i class="fa fa-ellipsis-v pull-right dropdown-toggle" id="hey" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
</i>
    <div class="dropdown-menu pull-right" aria-labelledby="dropdownMenu4">
        <a id="spaced" class="dropdown-item" href="/head/postannouncement ">Post Announcement</a><br/>
        <a id="spaced" class="dropdown-item" href="/head/announcement">See all</a><br/>
    </div>
</div>
           
        </div>
       </div> 
        <div class="col-md-12 content-row">
         <div class="col-md-8">
           <div class="col-md-12">
            @yield('ann-con')
            </div>
         </div>
          <label style="color:rgb(150,150,150)">MESSAGES:</label>
        <div class="col-md-4">
          @foreach($query as $row)
           <div class="row">
            <div id="cont-msgs" class="col-md-12 content-item">
              <div class="row">
                 <div class="col-md-12">
                  <div id="bord">
                     <h5><span class="fa fa-envelope msg-contx"></span> <b><a class="" id="msg-name">{{$row->msg_from}}</a></b><a href="/head/postannouncement" class="pull-right" id="icon-size"><b>X</b></a></h5>
                  </div>
                   <p class="msg-contx1">{{$row->message}}</p>
                </div>
              </div>
          </div>
           </div>
           <br/>
          @endforeach()
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



