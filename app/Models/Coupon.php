<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'coupon_code',
        'discount_percentage',
        'expiration_date',
        'usage_limit',
        'coupon_status',
    ];

    protected $casts = [
        'expiration_date' => 'date',
    ];

    // Check if the coupon is expired
    public function isExpired()
    {
        return $this->expiration_date < now();
    }
}
