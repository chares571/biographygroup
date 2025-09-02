<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('biography')->group(function () {
    Route::get('/chares', fn() => view('biographies.chares'));
    Route::get('/jennifer', fn() => view('biographies.jennifer'));
    Route::get('/ciara', fn() => view('biographies.ciara'));
    Route::get('/diana', fn() => view('biographies.diana'));
});
