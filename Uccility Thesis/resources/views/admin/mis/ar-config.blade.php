@extends('layouts.admin')

@section('title', 'Augmented Reality Configuration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3 style="color: #fc7349;">Data</h3><hr>
                <h1><i class="icon-uccility-file" style="font-size: 45px;"></i> 27</h1>
                <hr>
                <p>Images with AR Data...</p>

                <h1><i class="icon-uccility-file" style="font-size: 45px;"></i> 27</h1>
                <hr>
                <p>Images with AR Data...</p>

                <h1><i class="icon-uccility-file" style="font-size: 45px;"></i> 27</h1>
                <hr>
                <p>Images with AR Data...</p>
            </div>
        </div>
        <div class="col-md-9 content-row">
            <div class="col-md-12 content-item">
                <br>
                <button class="btn btn-primary btn-o"><i class="fa fa-pencil"></i> New</button>
                <button class="btn btn-primary btn-o"><i class="icon-uccility-file"></i> Manage</button><hr>
                <p>Showing 10 of 27...</p>
                <table class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <td>Scanned Image</td>
                            <td>Data</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-md-12 scanned-img" style="width: 200px;">
                                    <img src="{{ asset('img/avatar.png') }}" alt="scanned_img" class="img-responsive img-thumbnail" style="">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12 scanned-img" style="width: 200px;">
                                    <h3 style="color: orange; font-size: 30px;">Welcome to University of Caloocan City</h3>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-o"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-primary btn-o"><i class="fa fa-pencil"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 scanned-img" style="width: 200px;">
                                    <img src="{{ asset('img/avatar.png') }}" alt="scanned_img" class="img-responsive img-thumbnail" style="">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12 scanned-img" style="width: 200px;">
                                    <h3 style="color: orange; font-size: 30px;">Welcome to University of Caloocan City</h3>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-o"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-primary btn-o"><i class="fa fa-pencil"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 scanned-img" style="width: 200px;">
                                    <img src="{{ asset('img/avatar.png') }}" alt="scanned_img" class="img-responsive img-thumbnail" style="">
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12 scanned-img" style="width: 200px;">
                                    <h3 style="color: orange; font-size: 30px;">Welcome to University of Caloocan City</h3>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-o"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-primary btn-o"><i class="fa fa-pencil"></i></button>
                            </td>
                        </tr>
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