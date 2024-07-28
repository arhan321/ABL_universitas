<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1/testing', 'middleware' => 'auth'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'get_user']);
});