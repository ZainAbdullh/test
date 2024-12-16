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
                                <h4 class="user-name mb-0">Mohammed Salem</h4>
                                <h6 class="text-muted">Accountant</h6>


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
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Employees ID</p>
                                                <p class="col-sm-9">John Doe</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date Of Birth</p>
                                                <p class="col-sm-9">1990-11-22</p>
                                            </div>
                                            
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                                <p class="col-sm-9">mohammeds_alem@gmail.com</p>
                                                
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                                <p class="col-sm-9">305-310-5857</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Salary</p>
                                                <p class="col-sm-9">5000</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Hire Date</p>
                                                <p class="col-sm-9">2020-11-22</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">

                                    <div class="card">
                                        <img src="{{asset('admin\assets\img\contract.jpg')}}" class="card-img-top" alt="Contract Photo">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Contract Photo</span>
                                            </h5>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <img src="{{asset('admin\assets\img\Card.png')}}" class="card-img-top" alt="Employee Card Photo">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Employee Card Photo</span>
                                            </h5>
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
