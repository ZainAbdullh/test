@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Complaints</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Client Name:</p>
                                        <p class="col-sm-9">Ahmed Bin Saeed</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Complaint Date:</p>
                                        <p class="col-sm-9">+971 50 123 4567</p>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Complaint Text:</p>
                                        <p class="col-sm-9">+971 50 123 4567</p>
                                    </div>
                                    <br><br>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card card-table">
                                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="comment ...">
                                    </div>
                                   
                                    
                                        <select class="form-control select">
                                            <option>Select Status</option>
                                            <option>Under Review</option>
                                            <option>Resolved</option>
                                        </select>
                               </div>    </div>    </div>    </div>   
                               <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
