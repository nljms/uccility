   @extends('depthead.ann')

  @section('title', 'Administrator')

@section('ann-con')
   
   @for($g=0;$g<=5;$g++ )
     <div class="row">
        <div id="cont-msgs1" class="col-md-12 content">
             <a><h4><i class="fa fa-ellipsis-v pull-right"></i></h4></a>
            <div class="row">
               <div class="col-md-1">
              <br/>
                <img id="img-icon" src="/img/avatar.png" />
              </div>
              <div class="col-md-11">
                <a href="#"><b id="pads">Mr. William Mordoe</b></a>
                <br/><p class="paddd"><b>4 hrs</b></p>
              </div>

              <div class="col-md-12">
              <br/>
                <p class="post-parag">Hello Everyone</p>
              </div>
            </div>
            <hr/>
            <div class="row">
               <div class="col-md-8"> <img id="cm-icon1" src="/img/avatar.png"/>
                 <a href="#"><b id="pads1">Mr. William Mordoe</b></a> <span>Hey</span></div>
            </div>
            <br/>
             <div class="row">
               <div class="col-md-8"> <img id="cm-icon1" src="/img/avatar.png"/>
                 <a href="#"><b id="pads1">Mrs. Dominique Jennings</b></a> <span>What's Up</span></div>
            </div>
           
                 <div class="row">
             <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <a data-toggle="collapse" data-parent="#accordion" id="spaces" class="pull-right" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="mb-0">
                <i class="fa fa-comment msg-contx"></i> Comment
            </h5>
            </a>
            <br/>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
              <input type="text" placeholder="Write Comment..."/>
            </div>
            </div>
    </div>
    </div>
            </div>
         </div>
      </div>
      <br/><br/>
   @endfor()
                     
    @stop