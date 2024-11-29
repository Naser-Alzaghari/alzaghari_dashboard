<?php

namespace App\Http\Controllers\user;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ShopSidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Fetch all products
        // Get the price range from the request, default to '0-0' if not set
        $priceRange = $request->input('price_range', '0-0');
        [$minPrice, $maxPrice] = explode('-', $priceRange);

        // Check if the price range is set or default
        if ($minPrice == 0 && $maxPrice == 0) {
            // If the price range is not set, fetch all products
            $products = Product::all();
        } else {
            // If the price range is set, fetch products within that price range
            $products = Product::where(function($query) use ($minPrice, $maxPrice) {
                $query->whereBetween('price', [(float)$minPrice, (float)$maxPrice])
                      ->orWhere(function($query) use ($minPrice, $maxPrice) {
                          $query->whereNotNull('price_after_discount')
                                ->whereBetween('price_after_discount', [(float)$minPrice, (float)$maxPrice]);
                      });
            })->get();
        }
        $colors = Color::all();
        $categories = Category::all();
        // Return a view with products
        return view('user.shop-sidebar', compact('products','colors','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

