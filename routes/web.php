<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return "HI";
});
Route::get('/', function () {
    return view('welcome');
});
