<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/bio1', function () {
    return view('bio1');
});

Route::get('/bio2', function () {
    return view('bio2');
});

Route::get('/bio3', function () {
    return view('bio3');
});

Route::get('/bio4', function () {
    return view('bio4');
});
