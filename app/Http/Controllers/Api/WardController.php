<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WardResource;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    public function getAllWard(Ward $ward)
    {
        $wards = Ward::all();
        return WardResource::collection($wards);
    }

    public function getWardByDistrict(Ward $ward, District $district){

        $wards = $district->wards()->get();
        return  WardResource::collection($wards);
    }
}
