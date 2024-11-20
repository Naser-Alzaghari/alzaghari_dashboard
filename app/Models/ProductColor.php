<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColor extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'color_id', 'stock'];

    // Belongs-to relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Belongs-to relationship with Color
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
