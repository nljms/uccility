@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
                 <h1>Summary of CSD Grade Evaluation</h1><hr>
           <div class="col-md-12 content-row">
           <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="mb-0">
                Filtered By
                
            </h4>
            </a>
            <br/>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
        <div class="row">
            <div class="col-md-6">
              <select id="eval">
                <option>Year 2014</option>
                <option>Year 2015</option>
                <option>Year 2016</option>
                <option>Year 2017</option>
            </select><br/><br/>
            </div>
            <div class="col-md-6">
            <select id="eval">
                <option>1st Semester</option>
                <option>2nd Semester</option>
            </select><br/><br/>
            </div>
            </div>
    </div>
    </div>
    </div>

            <div class="col-md-6 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Total students Evaluate <i class="fa fa-users"></i></h2><hr>
                    <h1>16783</h1><hr>
                    <p>Overall number of Students...</p>
                </div>
            </div>
            <div class="col-md-6 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Total number of Pending <i class="fa fa-users"></i></h2><hr>
                    <h1>12783</h1><hr>
                    <p>Last Update: August 26, 2017 8:52 PM</p>
                </div>
            </div>  
             <div class="col-md-10 content-row"></div>
             <div class="col-md-2 content-row">
             <br/>
                 <a href="/head/eval">SHOW ALL FILES <i class="fa fa-file"></i></a>
                 <br/>
            </div>
              <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-4 content-row">
                <div class="col-md-12 content-item bordered-p">
                    <h3>Number of Passers <i class="fa fa-users"></i></h3><hr>
                    <h1>75</h1><hr>
                    <p>This Week | Last Week | Last Two Weeks</p>
                </div>
            </div>
             <div class="col-md-4 content-row">
                <div class="col-md-12 content-item bordered-p">
                    <h3>Number of Failed <i class="fa fa-users"></i></h3><hr>
                    <h1>75</h1><hr>
                    <p>This Week | Last Week | Last Two Weeks</p>
                </div>
            </div>
             <div class="col-md-4 content-row">
                <div class="col-md-12 content-item bordered-p">
                     <h3>Dropped Students <i class="fa fa-users"></i></h3><hr>
                    <h1>75</h1><hr>
                    <p>This Week | Last Week | Last Two Weeks</p>
                </div>
            </div>
            <div class="col-md-10 content-row"></div>

              <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-6 content-row">
                <div class="col-md-12 content-item">
                    <h2>Variation <i class="fa fa-users"></i></h2><hr>
                    <canvas id="piechart-users"></canvas>
                </div>
            </div>
            <div class="col-md-6 content-row">
                <div class="col-md-12 content-item">
                    <h2>Campus <i class="fa fa-users"></i></h2><hr>
                    <canvas id="piechart-distribute"></canvas>
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