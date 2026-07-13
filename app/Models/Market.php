<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Market extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'open_time',
        'close_time',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function payouts(): HasMany
    {
        return $this->hasMany(MarketPayout::class);
    }
}