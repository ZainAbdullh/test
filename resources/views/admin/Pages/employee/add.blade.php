@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            

            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Add Employees
                                        </h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Full Name <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Date Of Birth <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text"
                                                placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Employees ID </label>
                                            <input class="form-control" type="text" placeholder="Enter Employees ID">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Phone </label>
                                            <input class="form-control" type="text" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>E-Mail <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Job Title <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Enter First Job Title">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Hire Date<span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text"
                                                placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Salary </label>
                                            <input class="form-control" type="text" placeholder="Enter Salary Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="form-group service-upload">
                                        <span>Choose your Contract Photo</span>
                                        <input type="file" multiple>
                                        </div>
                                        
                                        <div class="form-group service-upload">
                                            <span>Choose your Employee Card Photo</span>
                                            <input type="file" multiple>
                                            </div>
                                        </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">SAVE</button>
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