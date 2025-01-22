<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});


Route::get('/about', function () {return view('about');});

Route::get('/contact', function () {return view('contact');});

Route::get('/services', function () {return view('services');});

Route::get('/privacy', function () {return view('privacy');});

Route::get('/termsncondition', function () {return view('termsncondition');});

Route::get('/community', function () {return view('community');});