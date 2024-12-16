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
                                <h4 class="user-name mb-0">Horizon Tower</h4>
                                <h6 class="text-muted">Ahmed Bin Saeed</h6>


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
                                            <br>
                                            <div class="container">
                                                <div class="form-group local-forms">
                                                    <label>Status <span class="login-danger">*</span></label>
                                                    <select class="form-control select">
                                                        <option>Select Status</option>
                                                        <option>Ongoing</option>
                                                        <option>Late</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="form-group local-forms">
                                                    <label>Current stage <span class="login-danger">*</span></label>
                                                    <select class="form-control select">
                                                        <option>Select Current stage</option>
                                                        <option>Initial plans</option>
                                                        <option>3D design</option>
                                                        <option>Structural design</option>
                                                        <option>lssuing licenses</option>
                                                        <option>Supervision stage
                                                        </option>
                                                        <option>Tender</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <h6>Completion rate</h6>
                                                <input type="range" min="0" max="100" value="50"
                                                    class="slider" id="mySlider">
                                                <div class="value" id="sliderValue">50</div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>1- Initial plans</span>
                                            </h5>
                                            <br>
                                            <div class="form-group service-upload">
                                                <span>Choose your files</span>
                                                <input type="file" multiple>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="comment ...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Engineer Name">
                                                        </div>
                                                    
                                                    <button class="btn btn-rounded btn-success" type="submit">Agree</button>
                                                   
                                                    
                                                        <button class="btn btn-rounded btn-danger" type="submit">Rejected</button>
                                                      
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>2- 3D design</span>
                                            </h5>
                                            <br>
                                            <div class="form-group service-upload">
                                                <span>Choose your files</span>
                                                <input type="file" multiple>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="comment ...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Engineer Name">
                                                        </div>
                                                    
                                                    <button class="btn btn-rounded btn-success" type="submit">Agree</button>
                                                   
                                                    
                                                        <button class="btn btn-rounded btn-danger" type="submit">Rejected</button>
                                                      
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>3- Structural design</span>
                                            </h5>
                                            <br>
                                            <div class="form-group service-upload">
                                                <span>Choose your files</span>
                                                <input type="file" multiple>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="comment ...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Engineer Name">
                                                        </div>
                                                    
                                                    <button class="btn btn-rounded btn-success" type="submit">Agree</button>
                                                   
                                                    
                                                        <button class="btn btn-rounded btn-danger" type="submit">Rejected</button>
                                                      
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>4- lssuing licenses</span>
                                            </h5>
                                            <br>
                                            <div class="form-group service-upload">
                                                <span>Choose your files</span>
                                                <input type="file" multiple>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="comment ...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Engineer Name">
                                                        </div>
                                                        <div class="card-title">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" id="enableTax" name="invoice">
                                                            <span class="checkmark"></span> Architectural
                                                            </label>
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" id="enableTax" name="invoice">
                                                                <span class="checkmark"></span> Structural
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" id="enableTax" name="invoice">
                                                                    <span class="checkmark"></span> MEP
                                                                    </label>
                                                                    <label class="custom_check w-100">
                                                                        <input type="checkbox" id="enableTax" name="invoice">
                                                                        <span class="checkmark"></span> Soil Testing

                                                                        </label>
                                                                    </div>
                                                    <button class="btn btn-rounded btn-success" type="submit">Agree</button>
                                                   
                                                    
                                                        <button class="btn btn-rounded btn-danger" type="submit">Rejected</button>
                                                      
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>5- Supervision stage</span>
                                            </h5>
                                            <br>
                                            <div class="form-group service-upload">
                                                <span>Report uploaded by engineer</span>
                                                <input type="file" multiple>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Completion rate">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="comment...">
                                                        </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Engineer Name">
                                                        </div>
                                                    
                                                    <button class="btn btn-rounded btn-success" type="submit">Agree</button>
                                                   
                                                    
                                                        <button class="btn btn-rounded btn-danger" type="submit">Rejected</button>
                                                      
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>6- Tender</span>
                                            </h5>
                                            <br>
                                            <div class="form-group service-upload">
                                                <span>Choose your files</span>
                                                <input type="file" multiple>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="comment ...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Engineer Name">
                                                        </div>
                                                        <div class="card-title">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" id="enableTax" name="invoice">
                                                            <span class="checkmark"></span> Electrical
                                                            </label>
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" id="enableTax" name="invoice">
                                                                <span class="checkmark"></span> Water supply
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" id="enableTax" name="invoice">
                                                                    <span class="checkmark"></span> Drainage
                                                                    </label>
                                                                    <label class="custom_check w-100">
                                                                        <input type="checkbox" id="enableTax" name="invoice">
                                                                        <span class="checkmark"></span> Ac

                                                                        </label>
                                                                    </div>
                                                    <button class="btn btn-rounded btn-success" type="submit">Agree</button>
                                                   
                                                    
                                                        <button class="btn btn-rounded btn-danger" type="submit">Rejected</button>
                                                      
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="#"><i class="fas fa-comment"></i> <span>Chat</span></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="#"><i class="fas fa-file-invoice"></i> <span> Bills</span></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="#"><i class="fas fa-exclamation-circle"></i>
                                                <span>Complaints</span></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="#"><i class="fas fa-file-alt"></i> <span>Reports</span></a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="#"><i class="fas fa-calendar-alt"></i>
                                                <span>Appointment</span></a>
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
    <script>
        const slider = document.getElementById('mySlider');
        const sliderValue = document.getElementById('sliderValue');

        slider.oninput = function() {
            sliderValue.textContent = this.value;
        }
    </script>
@endsection
