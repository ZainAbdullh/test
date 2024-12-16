@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    
    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Engineers</h3>
    
    </div>
    </div>
    </div>
    
    
    <div class="row">
    <div class="col-sm-12">
    <div class="card card-table">
    <div class="card-body">
    
    <div class="page-header">
    <div class="row align-items-center">
    
    <div class="col-auto text-end float-end ms-auto download-grp">
        <a href="{{url('#')}}" class="btn btn-outline-primary me-2"><i class="fas fa-plus"></i>  Add New Engineers</a>
    </div>
    </div>
    </div>
    
    <div class="table-responsive">
    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
    <thead class="student-thread">
    <tr>
    <th>Engineers Name</th>
    <th>Project Name</th>
    <th>Client Name</th>
    <th>Number of projects</th>
    <th>Project status</th>
    <th class="text-end">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>   
    <td>Khaled Al-Obaidi</td>
    <td>Horizon Tower</td>
    <td>Ahmed Bin Saeed</td>
    <td>6</td>
    <td>Plans</td>
    <td class="text-end">
    <div class="actions">
    <a href="#" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="#" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
    </div>
    </td>
    </tr>
    
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    


@endsection