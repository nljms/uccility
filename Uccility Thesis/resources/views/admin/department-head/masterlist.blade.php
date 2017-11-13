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
        <a id="spaced" class="dropdown-item" href="/head/postannouncement ">Download </a><br/>
        <a id="spaced" class="dropdown-item" href="/head/announcement">Print</a><br/>
    </div>
       <h1>Master List</h1>
</div>
            <br/>
            <table class="table table-striped">
            <thead >
              <tr>
                <th>Student Number</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Semester</th>
                <th>School Year</th>
              </tr>
              </thead>
              <tbody>
              @for($var = 0; $var < 8;$var++)
              <tr>
                <td>20140512</td>
                <td>Morales Ryan Kenth</td>
                <td>Male</td>
                <td>Regular</td>
                <td>2nd Sem</td>
                <td>2017-2018</td>
              </tr>
              @endfor
              </tbody>
            </table>
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






