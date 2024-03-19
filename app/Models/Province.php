<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['provinceName', 'provinceName_en', 'provinceType'];

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }

    public function wards():HasMany
    {
        return $this->hasMany(Ward::class);
    }
}
