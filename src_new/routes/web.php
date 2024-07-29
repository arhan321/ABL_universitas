<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\DataDosenController;
use App\Http\Controllers\DataStaffController;
use App\Http\Controllers\DataMatkulController;
use App\Http\Controllers\DataMahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1/account', 'middleware' => 'auth'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'get_user']);
    Route::post('/', [UserController::class, 'create']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'delete']);
});

Route::group(['prefix' => 'api/v1/dosen', 'middleware' => 'auth'], function() {
    Route::get('/', [DataDosenController::class, 'index']);
    Route::get('/{id}', [DataDosenController::class, 'get_dosen']);
    Route::post('/', [DataDosenController::class, 'create']);
    Route::put('/{id}', [DataDosenController::class, 'update']);
    Route::delete('/{id}', [DataDosenController::class, 'delete']);
});

Route::group(['prefix' => 'api/v1/mahasiswa', 'middleware' => 'auth'], function() {
    Route::get('/', [DataMahasiswaController::class, 'index']);
    Route::get('/{id}', [DataMahasiswaController::class, 'get_mahasiswa']);
    Route::post('/', [DataMahasiswaController::class, 'create']);
    Route::put('/{id}', [DataMahasiswaController::class, 'update']);
    Route::delete('/{id}', [DataMahasiswaController::class, 'delete']);
});

Route::group(['prefix' => 'api/v1/matkul', 'middleware' => 'auth'], function() {
    Route::get('/', [DataMatkulController::class, 'index']);
    Route::get('/{id}', [DataMatkulController::class, 'get_matkul']);
    Route::post('/', [DataMatkulController::class, 'create']);
    Route::put('/{id}', [DataMatkulController::class, 'update']);
    Route::delete('/{id}', [DataMatkulController::class, 'delete']);
});

Route::group(['prefix' => 'api/v1/staff', 'middleware' => 'auth'], function() {
    Route::get('/', [DataStaffController::class, 'index']);
    Route::get('/{id}', [DataStaffController::class, 'get_staff']);
    Route::post('/', [DataStaffController::class, 'create']);
    Route::put('/{id}', [DataStaffController::class, 'update']);
    Route::delete('/{id}', [DataStaffController::class, 'delete']);
});

Route::group(['prefix' => 'api/v1/nilai', 'middleware' => 'auth'], function() {
    Route::get('/', [NilaiController::class, 'index']);
    Route::get('/{id}', [NilaiController::class, 'get_nilai']);
    Route::post('/', [NilaiController::class, 'create']);
    Route::put('/{id}', [NilaiController::class, 'update']);
    Route::delete('/{id}', [NilaiController::class, 'delete']);
});