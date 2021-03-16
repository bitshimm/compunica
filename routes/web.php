<?php

Route::get('/', function () {
    return view('main');
})-> name('main');

Route::get('/services', function () {
    return view('services');
})-> name('services');

Route::get('/projects', function () {
    return view('projects');
})-> name('projects');

Route::get('/special', function () {
    return view('special');
})-> name('special');

Route::get('/contacts', function () {
    return view('contacts');
})-> name('contacts');

Route::get('/about', function () {
    return view('about');
})-> name('about');

Route::get('/login', function () {
    return view('login');
})-> name('login');

Route::post('/login/submit', function () {
    return "okey";
})-> name('login-form');


