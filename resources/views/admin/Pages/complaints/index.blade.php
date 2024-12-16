@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Complaints List</h3>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">


                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Complaint date</th>
                                            <th>Status</th>

                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Ahmed Al-Salem</td>
                                            <td>2024-11-22</td>
                                            <td>Under Review</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="{{ url('complaints_view') }}"
                                                        class="btn btn-sm bg-success-light me-2">
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
