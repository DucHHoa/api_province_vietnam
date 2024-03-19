<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ward extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    public function provinces(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
    public function districts(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
