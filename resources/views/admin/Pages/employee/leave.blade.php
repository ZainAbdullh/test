@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

           

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
<h3>Employee leave</h3>
<br>
                            <p>Total Annual Leave: <strong>20 days</strong></p>
                            <p>Used Leave: <strong>5 days</strong></p>
                            <p>Remaining Leave: <strong>10 days</strong></p>
                            <br>
                            <h2>Leave Record</h2>
                            <br>
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Leave Type</th>
                                        <th>Leave Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01/01/2024</td>
                                        <td>15/01/2024</td>
                                        <td>Annual Leave</td>
                                        
                                        <td><span class="badge badge-success">Used</span></td>
                                        <td>
                                            <div class="actions">
                                               
                                                <a href="#" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01/03/2024</td>
                                        <td>10/03/2024</td>
                                        <td>Annual Leave</td>
                                        <td><span class="badge badge-danger">Pending</span></td>
                                        <td>
                                            <div class="actions">
                                               
                                                <a href="#" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05/03/2023</td>
                                        <td>20/02/2024</td>
                                        <td>Sick Leave</td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        <td>
                                            <div class="actions">
                                               
                                                <a href="#" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
<br>
                            <h5>New Leave Request</h5>
                            <br>
                            <form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group local-forms">
                                                <label>Leave Type <span class="login-danger">*</span></label>
                                                <select class="form-control select">
                                                    <option>Leave Type:</option>
                                                    <option>Annual Leave</option>
                                                    <option>Sick Leave</option>
                                                    <option>Personal Leave</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Start Date:<span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>End Date:<span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">SAVE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>








                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
