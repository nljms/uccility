@extends('layouts.admin')

@section('title', 'Users')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-row">
            <div class="col-md-12 content-item">
                <h1>Students</h1>
                <p>Showing 20 of 4561</p><hr>
                <table class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>User ID</td>
                            <td>Student Number</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Middle Name</td>
                            <td>Course</td>
                            <td>Year</td>
                            <td>Section</td>
                            <td>Campus</td>
                            <td>Status</td>
                            <td>IsActivated</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1;$i <= 20;$i++)
                        <tr>
                            <td><a href="/admin/mis/users/students/profile/1">{{ $i }}</a></td>
                            <td>{{ rand(1, 20) }}</td>
                            <td>20140{{ rand(100, 999) }}</td>
                            <td>Bert</td>
                            <td>Bert</td>
                            <td>Bert</td>
                            <td>BSCS</td>
                            <td>4</td>
                            <td>C</td>
                            <td>Congress</td>
                            <td>Regular</td>
                            <td>Yes</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                <div class="col-md-12 pagination">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection