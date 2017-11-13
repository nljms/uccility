@extends('layouts.coor')

@section('title', 'Coordinator')

@section('content')
    <div class="col-md-12 contents">
       <div class="col-md-12 content-row">
         <div class="col-md-12 content-item">
            <h1>Class Scheduling</h1>
          
          </div>
    </div>


            <div class="col-md-12 content-row">
            <div class="col-md-4 content-item bordered-o">
            <div class="row">
               <div class="col-md-12">
               <label id="an">Course Load</label>
               <select class="form-control dar">
                   <option>CS 225</option>
                   <option>CS 226</option>
                   <option>CS 228</option>
                   <option>CS 222</option>
              </select></div>
               </div>

               <div class="row">
               <div class="col-md-12">
               <label id="an">Professors</label>
               <select class="form-control dar">
                   <option>Joel Cabaluna</option>
              </select></div>

              </div>

               <div class="row">
               <div class="col-md-12">
               <label id="an">Degree</label>
               <select class="form-control dar">
                   <option>BSCS</option>
                   <option>BSIS</option>
                   <option>BSIT</option>
                   <option>BSEMC</option>
              </select></div>
            </div>

               <div class="row">
               <div class="col-md-12">
               <label id="an">Year Level</label>
               <select class="form-control dar">
                   <option>1st</option>
                   <option>2nd</option>
                   <option>3rd</option>
                   <option>4th</option>
              </select></div>
            </div>

                <div class="row">
               <div class="col-md-12">
               <label id="an">Section</label>
               <select class="form-control dar">
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
              </select></div>
            </div>

                <div class="row">
               <div class="col-md-12">
               <label id="an">Semester</label>
               <select class="form-control dar">
                   <option>1st</option>
                   <option>2nd</option>
              </select></div>
            </div>

            <div class="row">
               <div class="col-md-12">
               <label id="an">Room</label>
               <select class="form-control dar">
                   <option>301</option>
                   <option>302</option>
                   <option>303</option>
                   <option>304</option>
                   <option>305</option>
              </select></div>
            </div>

            </div>
            <div class="col-md-8 set">
             <table class="table table-bordered">
              <thead class="blue-grey lighten-4">
              <tr>
                <th>START TIME</th>
                <th>MON</th>
                <th>TUES</th>
                <th>WED</th>
                <th>THU</th>
                <th>FRI</th>
                <th>SAT</th>
                <th>SUN</th>
              </tr>
              </thead>
              <tbody>
              @for($i=$start;$i<=$end;$i = $i + 30*60)
              <tr>
                <td>{{date('g:i A',$i)}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              @endfor
              </tbody>
            </table>
        </div>
                </div></div>

    @stop
