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
                                        <h5 class="form-title"><span>User information</span></h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container">
                                            <ul>
                                                <div class="form-group local-forms">
                                                    <label>Name <span class="login-danger">*</span></label>
                                                    <select class="form-control select">
                                                        <option>Select Client</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                                <li>Project Name: <span id="area"></span></li>
                                                <br>
                                                <li>Email: <span id="email"></span></li>
                                                <br>
                                                
                                                
                                                <li>Phone: <span id="piece-number"></span></li>
                                                <br>
                                                
                                                <li>Plot No.: <span id="city"></span></li>
                                                <br>
                                                <li>Zone: <span id="basin"></span></li>
                                                <br>
                                                <li>Loan Amount: <span id="loan-value"></span></li>
                                                <br>
                                                <li>Sector: <span id="financing-type"></span></li>
                                                <br>
                                                <li>Finance Type: <span id="financing-type"></span></li>
                                                <br>
                                                
                                                
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        
                                        <div class="container">
                                            <div class="form-group local-forms">
                                                <label>Project No. <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" placeholder="Enter Project No.">
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="form-group local-forms">
                                                <label>Project description <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Project description">
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="form-group local-forms">
                                                <label>Project meps id <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Project meps id">
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Start Date<span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text"
                                                    placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>End Date<span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text"
                                                    placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Save</button>
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
