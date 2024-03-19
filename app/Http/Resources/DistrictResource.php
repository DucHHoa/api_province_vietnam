<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
       [
            'id' => $this->id,
            'districtName' => $this->districtName,
            'districtName_en' => $this->districtName_en,
            'districtType' => $this->districtType,
            'districtCode' => $this->districtCode,
            //'fullName' => $this->fullName(),
            'provinceCode' => $this->province_id,
            'provinceName' => $this->provinceName
       ];
    }

    private function fullName(){
        return "{$this->province->provinceName}, {$this->district->districtName}";
    }
}
