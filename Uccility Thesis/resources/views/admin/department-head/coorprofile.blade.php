@extends('layouts.admin')

@section('content')

<div class="col-md-12 contents" role="main">
 <div class="col-md-12 content-row">
           <div class="col-md-12 content-item">
           <h1>Over All Profile <i class="fa fa-ellipsis-v pull-right"></i></h1><hr>
            @include('headmodal.imageupdate')
            <div class="row">
                  <div class="col-md-3 profile-pic">
                    <img src="{{asset('img/avatar.png')}}" alt="profile_picture" class="img-thumbnail img-responsive user-profile-pic">
                   <br/><br/>
                    <button type="button" class="browse" data-toggle="modal" data-target="#modalImage">Change</button>
                </div>
                <div class="col-md-9 profile-info" >
                 <h2 class="header" >Personal Details</h2>
                  
                  <div class="row">
                    <div class="col-md-4"><p class="info-title">Full Name</p>
                    <p>Rick William Murdock</p>
                    </div>
                      <div class="col-md-5"> 
                    <p class="info-title">Employment Status</p>
                    <p>Full Time</p>
                    </div>
                      <div class="col-md-2"> 
                     <p class="info-title">Total Units</p>
                    <p>45 units</p>       
                   </div>
                   </div>
              <div class="row">
                    <div class="col-md-4"> 
                    <p class="info-title">Department</p>
                    <p>Computer Studies Department</p>
                    </div>
                    <div class="col-md-5"><p class="info-title">Degree</p>
                    <p>Bachelor of Science in Computer Science</p>
                    </div>
                      <div class="col-md-2"> 
                     <p class="info-title">Campus</p>
                    <p>Congressional</p>       
                  </div>
                   </div>
                  
                       <hr>  
                  <div class="row">
                    <div class="col-md-9">
                     <p class="info-title">Home Address</p>
                    <p>Blk 11 Excess Lot Bukid Area Bagumbong North Caloocan City</p>
                    </div>
                     <div class="col-md-3">
                     <p class="info-title">City Address</p>
                    <p>Caloocan City</p>
                    </div>
                   </div>

                    <div class="row">
                    <div class="col-md-4"> 
                    <p class="info-title">Gender</p>
                    <p>Male</p>
                    </div>
                    <div class="col-md-5">
                         <p class="info-title">Email</p>
                    <p>e.loquine00@gmail.com</p>
                    </div>
                      <div class="col-md-2"> 
                  
                    <p class="info-title">Phone</p>
                    <p>+639434921921</p>
                  </div>
                   </div>                 
                </div>
            </div>       
            </div>
       </div>
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
                  <h1>Current Performance<i class="fa fa-ellipsis-v pull-right"></i></h1><hr>
                <div class="col-md-12 grade-graph">
                    <canvas id="linechart-gwa"></canvas>
                </div>
            </div>
       </div>
   
</div>
</body>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript">
  $('.collapse').collapse();

</script>
</html>

@endsection