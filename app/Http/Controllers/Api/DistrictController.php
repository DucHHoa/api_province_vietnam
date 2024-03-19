<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\WardResource;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAllDistrict(Province $province)
    {
        $districts = District::all();
        return DistrictResource::collection($districts);
    }

    public function getDistrictByProvince(Province $province, District $district){

        $districts = $province->districts()->get();
        return  DistrictResource::collection($districts);
    }
}
