@extends('admin.layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Bills add</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="form-group local-forms">
                                    
                                    <select class="form-control select">
                                        <option>Select Client</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group service-upload">
                                    <span>Raise the bill</span>
                                    <input type="file" multiple>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="comment ...">
                                </div>
                                <label class="custom_check w-100">
                                    <input type="checkbox" id="enableTax" name="invoice">
                                    <span class="checkmark"></span> Tax
                                </label>
                                <label class="custom_check w-100">
                                    <input type="checkbox" id="enableTax" name="invoice">
                                    <span class="checkmark"></span> Payment
                                </label>
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
        @endsection
