<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
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
        
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|numeric',
            'price_after_discount' => 'nullable|numeric',
            'stock' => 'required|integer',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
            'new_color_id' => 'nullable|integer|exists:colors,id',
            'new_color_stock' => 'nullable|integer',
        ]);

        // Create product
        $product = Product::create($validated);

        // Handle color stocks
        if ($request->has('color_stocks')) {
            foreach ($request->input('color_stocks') as $colorId => $stock) {
                $product->colors()->attach($colorId, ['stock' => $stock]);
            }
        }

        if ($request->has('new_color_id') && $request->input('new_color_stock') !== null) {
            $product->colors()->attach($request->input('new_color_id'), ['stock' => $request->input('new_color_stock')]);
        }


        if ($request->hasFile('images')) {
            
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $product->images()->create(['image_url' => $imagePath]);
            }
        }

        
        return redirect()->route('admin.products')->with('success', 'product created successfully.');
    }

    // Display the specified user
    public function show(Product $product)
    {
        return view('user.product-details', compact('product'));
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
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|numeric',
            'price_after_discount' => 'nullable|numeric',
            'stock' => 'required|integer',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
        ]);

        // Update product details
        $product->update($validated);

        // Handle colors and stocks
        if ($request->has('color_stocks')) {
            foreach ($request->input('color_stocks') as $colorId => $stock) {
                $product->colors()->updateExistingPivot($colorId, ['stock' => $stock]);
            }
        }

        if ($request->has('new_color_id') && $request->input('new_color_stock') !== null) {
            $product->colors()->attach($request->input('new_color_id'), ['stock' => $request->input('new_color_stock')]);
        }

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

        return redirect()->route('admin.products')->with('success', 'product updated successfully.');
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete(); // Soft delete
        return redirect()->route('admin.products')->with('success', 'product soft-deleted successfully!');
    }

    



//     public function restore($id)
// {
//     $product = User::onlyTrashed()->findOrFail($id);
//     $product->restore(); // Restore the user
//     return redirect()->route('users.trashed')->with('success', 'User restored successfully!');
// }
}
