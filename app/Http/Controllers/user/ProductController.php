<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers\user;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('user.product-details', compact('product'));
    }


    public function getProductData(Request $request)
    {
        $productId = $request->query('id');
        $product = Product::with('images')->find($productId);

        if ($product) {
            return response()->json([
                'name' => $product->name,
                'price' => $product->price,
                'price_after_discount' => $product->price_after_discount,
                'description' => $product->description,
                'images' => $product->images->pluck('image_url'), // Pluck image URLs from images
                // 'link' => route('product.details', $product->id),
                'category' => $product->category->name,
            ]);
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
