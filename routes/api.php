<?php

use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\WardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('provinces', ProvinceController::class);
Route::get('/districts', [DistrictController::class, 'getAllDistrict']);
Route::get('/provinces/{province}/districts', [DistrictController::class, 'getDistrictByProvince']);

Route::get('/wards', [WardController::class, 'getAllWard']);
Route::get('/districts/{district}/wards', [WardController::class, 'getWardByDistrict']);