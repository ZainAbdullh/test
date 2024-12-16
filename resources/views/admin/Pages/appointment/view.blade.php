@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Appointment view</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="form-group local-forms">
                                        <label>Client Name <span class="login-danger">*</span></label>
                                        <select class="form-control select">
                                            <option>Select Client</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                        <label>Date <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                        </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                            <label>Start Time <span class="login-danger">*</span></label>
                                            <input type="time" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                            <label>End Time <span class="login-danger">*</span></label>
                                            <input type="time" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                                </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
