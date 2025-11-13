<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeerStore extends Pivot
{
    public $timestamps = true;

    protected $fillable = [
        'beer_id',
        'store_id',
        'price',
        'url',
        'promo_label',
    ];

    public function beer(): BelongsTo
    {
        return $this->belongsTo(Beer::class);
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
