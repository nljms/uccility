@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
<div class="col-md-12 contents" >
    <div class="col-md-12 content-row">
        <div class="col-md-8 content-row" >
          <div class="col-md-12 content-item">
            <h4>Ryan Kenth Morales</h4><hr/>
            <br/>
            <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1">
                             <img id="img-icon" src="/img/avatar.png" />
                        </div>
                         <div class="col-md-11">
                             <span class="message">Are you free tonight?</span>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-8">                        
                        </div>
                         <div class="col-md-4">
                            <span class="reply"> I will check my schedule later</span>   
                        </div>
                    </div>
                   <br/><br/>
                      <div class="row">
                        <div class="col-md-1">
                             <img id="img-icon" src="/img/avatar.png" />
                        </div>
                         <div class="col-md-11">
                             <span class="message">Are you free tonight?</span>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-8">                        
                        </div>
                         <div class="col-md-4">
                            <span class="reply"> I will check my schedule later</span>   
                        </div>
                    </div>
                     <br/><br/>
                      <div class="row">
                        <div class="col-md-1">
                             <img id="img-icon" src="/img/avatar.png" />
                        </div>
                         <div class="col-md-11">
                             <span class="message">Are you free tonight?</span>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-8">                        
                        </div>
                         <div class="col-md-4">
                             <span class="reply">I will check my schedule later</span>   
                        </div>
                    </div>
                    <br/><br/>
                      <div class="row">
                        <div class="col-md-1">
                             <img id="img-icon" src="/img/avatar.png" />
                        </div>
                         <div class="col-md-11">
                             <span class="message">Are you free tonight?</span>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-8">                        
                        </div>
                         <div class="col-md-4">
                             <span class="reply">I will check my schedule later</span>   
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-10">  
                          <input type="text" placeholder="type your message....">                      
                        </div>
                         <div class="col-md-2">  
                          <button id="mes-send">Send</button>                     
                        </div>
                    </div>
                    
            </div>
           
            </div>
        </div>
          <div class="col-md-4 content-row">
        <div class="col-md-12 content-item">
          <h4>Coordinators<i class="fa fa-edit pull-right"></i></h4>
       <hr/>
        <div class="row">
             <div class="col-md-3">
             <img src="{{asset('img/avatar.png')}}" class="img-circles profile_imgs" alt="avatar_img">
             </div>
              <div class="col-md-7">
              <p class="contact">Ryan Kenth Morales</p>
              </div>
        </div>
        <br/>
        <div class="row">
             <div class="col-md-3">
             <img src="{{asset('img/avatar.png')}}" class="img-circles profile_imgs" alt="avatar_img">
             </div>
              <div class="col-md-7">
              <p class="contact">Ryan Kenth Morales</p>
              </div>
        </div>
        <br/>
        <div class="row">
             <div class="col-md-3">
             <img src="{{asset('img/avatar.png')}}" class="img-circles profile_imgs" alt="avatar_img">
             </div>
              <div class="col-md-7">
               <p class="contact">Ryan Kenth Morales</p>
              </div>
        </div>
        <br/>
        <div class="row">
             <div class="col-md-3">
             <img src="{{asset('img/avatar.png')}}" class="img-circles profile_imgs" alt="avatar_img">
             </div>
              <div class="col-md-7">
              <p class="contact">Ryan Kenth Morales</p>
              </div>
        </div>
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