<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Casts\MoneyCast;
class Treatment extends Model
{
    use HasFactory;
    protected $casts = [
        'price' => MoneyCast::class,
    ];
    public function patients(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
