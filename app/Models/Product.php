<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'price_after_discount', 'stock', 'category_id'];

    // Belongs-to relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // One-to-Many relationship with ProductImages
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Many-to-Many relationship with Colors (through ProductColors)
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors', 'product_id', 'color_id')
                    ->withPivot('stock', 'image_url');
    }

    // One-to-Many relationship with Reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function averageRating() { return $this->reviews()->where('is_active', 1)->avg('rating'); }
    public function ratingsCount()
{
    return $this->reviews()->where('is_active', 1)->count();
}

}

