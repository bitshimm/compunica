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
Route::get('/admin/data/edit/{id}', 'ApplicationController@Edit')->name('edit-application');


