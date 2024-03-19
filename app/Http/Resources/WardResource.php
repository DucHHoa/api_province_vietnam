<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WardResource extends JsonResource
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
             'wardName' => $this->wardName,
             'wardName_en' => $this->wardName_en,
             'wardType' => $this->wardType,
             'wardCode' => $this->wardCode,
             'fullName' => $this->fullName(),
             'districtCode' => $this->district_id,
             'provinceCode' => $this->province_id
        ];
    }

    private function fullName(){
        $fullName = '';

        if ($this->province && $this->district) {
            $fullName = "{$this->province->provinceName}, {$this->district->districtName}, {$this->wardName}";
        }
    
        return $fullName;
    }
}
