<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})-> name('main');

Route::get('/services', function () {
    return view('services');
})-> name('services');

Route::get('/clients', function () {
    return view('clients');
})-> name('clients');

Route::get('/special', function () {
    return view('special');
})-> name('special');

Route::get('/contacts', function () {
    return view('contacts');
})-> name('contacts');

Route::get('/about', function () {
    return view('about');
})-> name('about');

Route::post('/services/submit', 'ApplicationController@submit')->name('services-form');

Auth::routes();

Route::get('/admin', function () {
    return view('admin');
})-> name('admin-data')->middleware('auth');

Route::get('/admin/data', 'DataController@Data')->name('admin-data');

Route::get('/admin/data/application/edit/{id}', 'ApplicationController@ApplicationEdit')->name('applicationEdit');

Route::post('/admin/data/application/edit/{id}','ApplicationController@ApplicationUpdateSubmit')->name('ApplicationUpdateSubmit');

Route::get('/admin/data/application/delete/{id}','ApplicationController@ApplicationDeleteSubmit')->name('ApplicationDeleteSubmit');

Route::get('/admin/data/application/add', 'ApplicationController@ApplicationAdd')->name('applicationAdd');

Route::post('/admin/data/application/add','ApplicationController@ApplicationAddSubmit')->name('ApplicationAddSubmit');



Route::get('/admin/data/employee/edit/{id}', 'EmployeeController@EmployeeEdit')->name('employeeEdit');

Route::post('/admin/data/employee/edit/{id}','EmployeeController@EmployeeUpdateSubmit')->name('EmployeeUpdateSubmit');

Route::get('/admin/data/employee/delete/{id}','EmployeeController@EmployeeDeleteSubmit')->name('EmployeeDeleteSubmit');

Route::get('/admin/data/employee/add', 'EmployeeController@EmployeeAdd')->name('employeeAdd');

Route::post('/admin/data/employee/add','EmployeeController@EmployeeAddSubmit')->name('EmployeeAddSubmit');

