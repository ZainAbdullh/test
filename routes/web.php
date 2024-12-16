<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index
    ');
});


//////////project 

Route::get('/project_index', function () {
    return view('admin.pages.projects.index');
});
Route::get('/project_add', function () {
    return view('admin.pages.projects.add');
});
Route::get('/project_edit', function () {
    return view('admin.pages.projects.edit');
});
////////////////////clients//////////////////////
Route::get('/client_index', function () {
    return view('admin.pages.clients.index');
});

Route::get('/client_profile', function () {
    return view('admin.pages.clients.profile');
});

// employees**********************************************************************************
Route::get('/employees', function () {
    return view('admin.pages.employee.index');
});
Route::get('/employees_add', function () {
    return view('admin.pages.employee.add');
});
Route::get('/employees_profile', function () {
    return view('admin.pages.employee.profile');
});
Route::get('/employees_leave', function () {
    return view('admin.pages.employee.leave');
});
/////////////////engineers
Route::get('/engineers', function () {
    return view('admin.pages.engineers.index');
});

//Reports*************************************
Route::get('/reports_index', function () {
    return view('admin.pages.reports.index');
});
Route::get('/reports_add', function () {
    return view('admin.pages.reports.add');
});
Route::get('/reports_view', function () {
    return view('admin.pages.reports.view');
});
//Bills*************************************
Route::get('/bills_index', function () {
    return view('admin.pages.bills.index');
});
Route::get('/bills_add', function () {
    return view('admin.pages.bills.add');
});
Route::get('/bills_view', function () {
    return view('admin.pages.bills.view');
});
//complaints*************************************
Route::get('/complaints_index', function () {
    return view('admin.pages.complaints.index');
});

Route::get('/complaints_view', function () {
    return view('admin.pages.complaints.view');
});

//Appointment*************************************
Route::get('/appointment_index', function () {
    return view('admin.pages.appointment.index');
});
Route::get('/appointment_add', function () {
    return view('admin.pages.appointment.add');
});
Route::get('/appointment_view', function () {
    return view('admin.pages.appointment.view');
});
