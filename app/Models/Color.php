<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['color_name', 'hex_code'];

    // Many-to-Many relationship with Products (through ProductColors)
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_colors', 'color_id', 'product_id')
                    ->withPivot('stock', 'image_url');
    }
}
