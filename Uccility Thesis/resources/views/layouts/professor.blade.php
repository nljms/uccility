<html lang="{{ app()->getLocale() }}">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'UCCLITY') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prof.css') }}">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="main_container">
			
          <div class="col-md-2">
          	<div class="row">
				 <div class="col-md-12 navbys sep">
				 <br/>
				 	<div class="row">
				 		<div class="col-md-12"> 
				 		<div class="profile_pics">
				 			 <img src="{{asset('img/avatar.png')}}" class="img-circles profile_imgs" alt="avatar_img">
				 		           </div>
				 		           <div class="profile_infos">
                                     <span>Roderick Uyluan </span>
                                     <h2 style="color:rgb(150,150,150)"><b>CSD</b></h2>
                                   </div>
				 		</div>
				 	</div>
				 </div>
				 <div class="col-md-12 maze">
                   
				 </div>
		    </div>
             </div>
				<div class="col-md-10 " role="main">
					<div class="row">
					  <div class="col-md-12 navby"></div>
					   <div class="col-md-12 mazes">
				 	     <div class="row">

				           <div class="col-md-8">
				           	 <br/>
				          <div class="row">
				           	 	<div class="col-md-3">
				           	 		<a class="no" href="/professors" class="tools" data-toggle="tooltip" data-placement="right" title="Home Page"><button class="btn mads iconec" ><i class="fa fa-home" id="mex" aria-hidden="true"></i></button></a>
				           	 	</div>
				           	 	<div class="col-md-3">
				           	 		<a class="no" href="/professor/manage" class="tools" data-toggle="tooltip" data-placement="right" title="Manage Grades"><button class="btn mads iconec"><i class="fa fa-folder-open" id="mex" aria-hidden="true"></i></button></a>
				           	 	</div>
				           	 	<div class="col-md-3">
				           	 		<a class="no" href="/professor/profile" class="tools" data-toggle="tooltip" data-placement="right" title="My Profile"><button class="btn mads iconec"><i class="fa fa-user" id="mex" aria-hidden="true"></i></button></a>
				           	 	</div>
				           	 		 	<div class="col-md-3">
				           	 		<a class="no" href="/professor/list" class="tools" data-toggle="tooltip" data-placement="right" title="Manage Students"><button class="btn mads iconec"><i class="fa fa-list" id="mex" aria-hidden="true"></i></button></a>
				           	 	</div>	
				           	 	</div><br/>
				           	 	<div class="meng">
                           @yield('content')
                           </div>
				           </div>
				           <br/>
				           <div class="col-md-4">
				           	     <div class="col-md-12 content-row">
                                   <div class="col-md-12 content-item">
                                     <h4>Over all Performance<i class="fa fa-ellipsis-v pull-right"></i></h4><hr>
                                 <div class="col-md-12 grade-graph made">
                                 <canvas id="prof-chart"></canvas>
                                 </div>
                                   </div>
                                </div>
                      
                                    <div class="col-md-12 content-row" >
                                   <div class="col-md-12 content-item ">
                                       <div class="dropdown">
  <!--        <h3>ANNOUNCEMENTS <a href="/head/postannouncement" id="icon-size"><i class="fa fa-ellipsis-v pull-right"></i></a></h3>  -->
							       <i class="fa fa-ellipsis-v pull-right dropdown-toggle" id="heyah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
							    <div class="dropdown-menu pull-right" aria-labelledby="dropdownMenu4">
							        <a id="spaced" class="dropdown-item" href="/professor/message">See all Posts</a><br/>
							    </div>
							       <h4>Announcements</h4><hr/>
							</div>
                                 <div class="col-md-12 made">
                                 @for($r=0;$r<4;$r++)
                                  <div class="row">
                                  	<div class="col-md-12">
                                  		<a href="/professor/message"><i class="icon-uccility-news-announcement" aria-hidden="true"></i> Dr. Reyes post an announcement</a>
                                  		<p class="hours">4hrs ago</p>
                                  	</div>
                                  </div>
                                  @endfor
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
   </body>
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
   <script src="{{ asset('js/some-script.js') }}"></script>
   <script src="{{ asset('js/ajax-request.js') }}"></script>
</html>
