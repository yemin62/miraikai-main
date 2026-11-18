<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    use HasFactory;
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
    ];
}
