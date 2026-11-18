<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    protected $fillable = [
        'item_name',
        'product_image',
        'price',
        'hourly_wage',
        'weekly_uses',
        'period_weeks',
        'total_uses',
        'work_hours',
        'cost_per_use',
        'status',
        'review_at',
    ];

    protected $casts = [
        'review_at' => 'datetime',
        'work_hours' => 'decimal:2',
        'cost_per_use' => 'decimal:2',
    ];
}
