<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        
        
            // Validate the request data
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'stock' => 'required',
                'category_id' => 'required',
                'price' => 'required',
            ]);
        
        
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);
        if ($request->hasFile('images')) {
            
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $product->images()->create(['image_url' => $imagePath]);
            }
        }

        // Attach colors to the product

        $product->colors()->attach($request->colors, ['stock' => $request->stock]);
        
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
        $colors = Color::all();
        $categories = Category::all();
        return view('admin.products.create', compact('product', 'categories','colors'));
    }

    public function addStockForm(Product $product)
    {
        return view('admin.products.addStock', compact('product'));
    }


    public function addStock(Request $request, Product $product)
    {
        return view('admin.products.addStock', compact('product'));
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
        $product->colors()->sync($request->input('colors', []));
        $product->category_id = $request->category_id;

        // Delete selected images
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = $product->images()->find($imageId);
                if ($image) {
                    // Delete the file from storage
                    Storage::disk('public')->delete($image->image_url);
                    // Delete the record from the database
                    $image->delete();
                }
            }
        }

        // Upload and save new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $product->images()->create(['image_url' => $imagePath]);
            }
        }
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
