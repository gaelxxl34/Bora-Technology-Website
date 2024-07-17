<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/community-service', function () {
    return view('community-service');
});

Route::get('/services', function () {
    return view('services');
});