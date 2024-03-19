<?php

use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\WardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
