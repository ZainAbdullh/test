@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Add Employees</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Employees Information <span><a
                                                    href="javascript:;"><i class="feather-more-vertical"></i></a></span>
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
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group students-up-files">
                                            <label>Upload Contract Photo </label>
                                            <div class="uplod">
                                                <label class="file-upload image-upbtn mb-0">
                                                    Choose File <input type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group students-up-files">
                                            <label>Upload Employee Card Photo</label>
                                            <div class="uplod">
                                                <label class="file-upload image-upbtn mb-0">
                                                    Choose File <input type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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