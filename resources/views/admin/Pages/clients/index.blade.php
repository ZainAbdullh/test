@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Clients list</h3>
                    </div>
                </div>
            </div>

            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">Client</h3>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Project Name</th>
                                            <th>Project stage</th>
                                            <th class="text-end">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#">Ahmed Bin Saeed</a>
                                                </h2>
                                            </td>
                                            <td>ahmed.saeed@example.com</td>
                                            <td>+971 50 123 4567</td>
                                            <td>Horizon Tower</td>
                                            <td>Initial plans</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="{{("/client_profile")}}" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
