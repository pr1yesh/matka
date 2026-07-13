<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MarketPayout extends Model
{
    protected $fillable = [
        'market_id',
        'game_type',
        'multiplier',
    ];

    public function market(): BelongsTo
    {
        return $this->belongsTo(Market::class);
    }
}