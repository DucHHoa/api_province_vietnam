<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceResource extends JsonResource
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
            'provinceName' => $this->provinceName,
            'provinceName_en' => $this->provinceName_en,
            'provinceType' => $this->provinceType,           
            'provinceCode' => $this->provinceCode,           
       ];
    }
}
