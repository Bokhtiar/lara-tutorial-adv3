<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

// Route::get('helper', [HelperFunctionController::class, 'index']);


Route::get('helper', function () {
    return view('myhelper');
});


