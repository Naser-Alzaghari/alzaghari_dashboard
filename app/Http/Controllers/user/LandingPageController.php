<?php

namespace App\Http\Controllers\user;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        // Fetch all products
        $products = Product::all();
        // Return a view with products
        
        return view('user.master', compact('products'));
    }
}
