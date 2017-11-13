@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>Filtered By Section</h1>
        </div>
    </div>
    <div class="col-md-12 content-row">
        <div class="col-md-4 content-row">
               <div class="col-md-12 content-item">
               <a ><h4><i class="fa fa-ellipsis-v pull-right"></i></h4></a>
            <h1><i class="icon-uccility-file" style="font-size:250%"></i></h1><hr/>
           <a href="/head/eval/degree/section"><h4>Section A</h4></a>
        </div>
        </div>
         <div class="col-md-4 content-row">
               <div class="col-md-12 content-item">
               <a ><h4><i class="fa fa-ellipsis-v pull-right"></i></h4></a>
            <h1><i class="icon-uccility-file" style="font-size:250%"></i></h1><hr/>
           <a href="/head/eval/degree/section"><h4>Section B</h4></a>
        </div>
        </div>
         <div class="col-md-4 content-row">
               <div class="col-md-12 content-item">
               <a ><h4><i class="fa fa-ellipsis-v pull-right"></i></h4></a>
            <h1><i class="icon-uccility-file" style="font-size:250%"></i></h1><hr/>
           <a href="/head/eval/degree/section"><h4>Section C</h4></a>
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






