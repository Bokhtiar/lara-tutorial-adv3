<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

// Route::get('helper', [HelperFunctionController::class, 'index']);


Route::get('helper', function () {
    return view('myhelper');
});


// Route::get('postCreate','PostController@postCreate');
// Route::post('postData','PostController@postData')->name('postData');
Route::get('user', [App\Http\Controllers\UserController::class, 'index']);


Route::get('postCreate', [App\Http\Controllers\PostController::class, 'postCreate']);
Route::post('postData', [App\Http\Controllers\PostController::class, 'postData'])->name('postData');


//multiple checkbox record delete

Route::get('myproducts', [App\Http\Controllers\ProductController::class, 'index']);

Route::delete('myproducts/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

Route::delete('myproductsDeleteAll', [App\Http\Controllers\ProductController::class, 'deleteAll']);

// Route::get('myproducts', 'ProductController@index');
// Route::delete('myproducts/{id}', 'ProductController@destroy');
// Route::delete('myproductsDeleteAll', 'ProductController@deleteAll');
