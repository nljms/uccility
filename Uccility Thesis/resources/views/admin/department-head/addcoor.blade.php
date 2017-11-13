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
       <h3>ADD NEW COORDINATOR</h3>
</div>
<hr/>
    <div class="col-md-12 content-row">
      <div class="col-md-12 content-item bordered-o">
        <div class="profile_pic">
          <img src="{{asset('img/avatar.png')}}" id="san" class="img-circle profile_img" alt="avatar_img">
        </div>
    <div class="row">
     {{ csrf_field() }}
      <div class="col-md-3">
        <h3>Degree</h3> 
          <select id="evals" class="deg">
        @foreach($degree as $row)
            <option value="{{$row->deg_ID}}">{{$row->deg_name}}</option>
        @endforeach  
          </select>
        </div>
       <div class="col-md-4">
          <h3>Instructor</h3>
            <select id="evals" class="ins">
              @foreach($query as $row)
               <option value="{{$row->prof_ID}}">{{$row->sname.", ".$row->fname." ".$row->mname." ".$row->initial}}</option>
              @endforeach
            </select>
        </div>
        <div class="damn"></div>
                   </div>
                    <br/>
               <div class="row">
                  <div class="col-md-7">
                 </div>
                  <div class="btn-group" >
                <button class="btn mads" id="save">
                 <i class="fa fa-user left"></i>
               <span>Save Changes</span>
                       </button> 
                        <button class="btn mads">
                 <i class="fa fa-commenting-o left"></i>
               <span>Cancel</span>
                       </button>
                </div>
                  </div>
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
<script src="{{ asset('js/choosecoor.js') }}" ></script>
<script type="text/javascript">
  $('.collapse').collapse();
</script>
</html>
    @stop





