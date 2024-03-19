<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinceResource;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProvinceResource::collection(Province::all());
    }

    public function show(Province $province, Request $id)
    {
        $province->findOrFail($id);
        return new ProvinceResource($province);
    }
}
