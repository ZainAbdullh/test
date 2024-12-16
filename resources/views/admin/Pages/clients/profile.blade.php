@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">

                            </div>
                            <div class="col ms-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">Ahmed Bin Saeed</h4>
                            </div>

                        </div>
                    </div>

                    <div class="tab-content profile-tab-cont">

                        <div class="tab-pane fade show active" id="per_details_tab">

                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Personal Details</span>
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                                <p class="col-sm-9">ahmed.saeed@example.com</p>
                                                
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                                <p class="col-sm-9">+971 50 123 4567</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Project Name</p>
                                                <p class="col-sm-9">Horizon Tower</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Plot No. </p>
                                                <p class="col-sm-9">1234</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Zone </p>
                                                <p class="col-sm-9">Dubai Marina</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Loan Amount </p>
                                                <p class="col-sm-9">5,000,000 AED</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Sector </p>
                                                <p class="col-sm-9">Residential</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Finance Type </p>
                                                <p class="col-sm-9">Mortgage Loan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                        </div>


                        
                    </div>
                    <div class="tab-content profile-tab-cont">

                        <div class="tab-pane fade show active" id="per_details_tab">

                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>First stage: Initial plans</span>
                                            </h5>
                                           
                                                
                                                <div class="card flex-fill bg-white">
                                                <img alt="Card Image" src="{{asset('admin/assets/img/Card.png')}}" class="card-img-top" style="width: 60%; height: auto;">
                                                <div class="card-header">
                                                    
                                                <h5  class="badge badge-success">Approved </h5>
                                                </div>
                                                <div class="card-body">
                                                <p class="card-text">comment...........</p>
                                                <h6 class="card-title mb-0">Engineers Name: Khaled Al-Obaidi</h6>
                                                </div>
                                                </div>
                                                
                                                
                                                
                                               
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
