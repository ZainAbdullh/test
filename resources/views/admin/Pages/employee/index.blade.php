@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Employees</h3>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">

                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ url('/employees_add') }}" class="btn btn-outline-primary me-2"><i
                                                class="fas fa-plus"></i> Add New Employee</a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>Employees Name</th>
                                            <th>Job Title</th>
                                            <th>Hire Date</th>
                                            <th>Salary</th>
                                            <th>Leave Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Mohammed Salem</td>
                                            <td>Accountant</td>
                                            <td>2020-11-22</td>
                                            <td>5000</td>
                                            <td>Present</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="{{url('/employees_profile')}}" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="{{('/employees_leave')}}" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-calendar"></i>

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
