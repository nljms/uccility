@extends('layouts.admin')

@section('title', 'Administration')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>Loquine, Edilbert Pantajo <i class="fa fa-ellipsis-v pull-right"></i></h1><hr>
            <div class="col-md-3 personal-info">
                <div class="profile-pic">
                    <img src="{{asset('img/avatar.png')}}" alt="profile_picture" class="img-thumbnail img-responsive user-profile-pic">
                </div>
                <div class="profile-info">
                    <p class="info-title id">Student</p>
                    <p class="info-title id">User ID: 1</p>
                    <p class="info-title id">Student #: 20140593</p>
                    <hr>
                    <p class="info-title">Program</p>
                    <p>Bachelor of Science in Computer Science</p>
                    <p class="info-title">Year and Section</p>
                    <p>4th - C</p>
                    <p class="info-title">Campus</p>
                    <p>Congressional</p>
                    <hr>
                    <p class="info-title">Address</p>
                    <p>Blk 11 Lot 2 North Triangle Cielito Homes Camarin Caloocan City</p>
                    <p class="info-title">Email</p>
                    <p>e.loquine00@gmail.com</p>
                    <p class="info-title">Phone</p>
                    <p>+639434921921</p>
                </div>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Academic Stats</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#panel2" role="tab">Records</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#panel3" role="tab">More Information</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel1" role="tabpanel">
                        <br>
                        <div class="col-md-9 grade-graph">
                            <canvas id="linechart-gwa"></canvas>
                        </div>
                        <div class="col-md-3 content-item">
                            <h3>Summary</h3><hr>
                            <p>1st Year Avg: 1.75</p>
                            <p>2nd Year Avg: 1.50</p>
                            <p>3rd Year Avg: 2.00</p>
                            <p>4th Year Avg: 1.25</p>
                        </div>
                        <div class="col-md-12 content-row">
                            <h2>Performance</h2>
                            
                        </div>
                    </div>

                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                    <h3>2nd Year 2nd Sem</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Subj Code</td>
                                    <td>Description</td>
                                    <td>Units</td>
                                    <td>Grades</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CS112</td>
                                    <td>Computer Programming 2</td>
                                    <td>5</td>
                                    <td>1.75</td>
                                </tr>
                                <tr>
                                    <td>CS113</td>
                                    <td>Digital Graphics</td>
                                    <td>3</td>
                                    <td>1.25</td>
                                </tr>
                                <tr>
                                    <td>CS114</td>
                                    <td>Digital Logic</td>
                                    <td>3</td>
                                    <td>1.50</td>
                                </tr>
                                <tr>
                                    <td>CS115</td>
                                    <td>Advance Database</td>
                                    <td>5</td>
                                    <td>1.75</td>
                                </tr>
                                <tr>
                                    <td colspan=2>Total:</td>
                                    <td>16</td>
                                    <td>5.25</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3>2nd Year 1st Sem</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Subj Code</td>
                                    <td>Description</td>
                                    <td>Units</td>
                                    <td>Grades</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CS112</td>
                                    <td>Computer Programming 2</td>
                                    <td>5</td>
                                    <td>1.75</td>
                                </tr>
                                <tr>
                                    <td>CS113</td>
                                    <td>Digital Graphics</td>
                                    <td>3</td>
                                    <td>1.25</td>
                                </tr>
                                <tr>
                                    <td>CS114</td>
                                    <td>Digital Logic</td>
                                    <td>3</td>
                                    <td>1.50</td>
                                </tr>
                                <tr>
                                    <td>CS115</td>
                                    <td>Advance Database</td>
                                    <td>5</td>
                                    <td>1.75</td>
                                </tr>
                                <tr>
                                    <td colspan=2>Total:</td>
                                    <td>16</td>
                                    <td>5.25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="panel3" role="tabpanel">
                        <h1>some 2</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection