<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductColor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of users
    public function index()
    {
        $products = Product::all();
        

    //     $product = Product::with('category')->findOrFail($id);

    // // Access the category name
    // $categoryName = $product->category->name;
        return view('admin.products.index', compact('products'));
    }

    // Show the form for creating a new user
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        return view('admin.products.create', compact('categories', 'colors'));
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        
        // try {
        //     // Validate the request data
        //     $request->validate([
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|string|email|max:255|unique:users',
        //         'password' => 'required|string|min:8|confirmed',
        //         'role_as' => 'nullable|integer', // 'role_as' is optional
        //     ]);
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     return redirect()->back()->withErrors($e->validator)->withInput();
        // }
        
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);

        // Attach colors to the product
        if ($request->has('color_id')) {
            ProductColor::create([
                'product_id' => $product->id,
                'color_id' => $request->color_id,
                'stock' => $request->stock,
            ]);

        }
        
        return redirect()->route('products.index')->with('success', 'product created successfully.');
    }

    // Display the specified user
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.create', compact('product', 'categories'));
    }

    // Update the specified user in the database
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'stock' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('products.index')->with('success', 'product updated successfully.');
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete(); // Soft delete
        return redirect()->route('products.index')->with('success', 'product soft-deleted successfully!');
    }

//     public function restore($id)
// {
//     $product = User::onlyTrashed()->findOrFail($id);
//     $product->restore(); // Restore the user
//     return redirect()->route('users.trashed')->with('success', 'User restored successfully!');
// }
}