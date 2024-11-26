<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Display a listing of users
    public function index()
    {
        $categories = Category::all();
        

    //     $category = Category::with('category')->findOrFail($id);

    // // Access the category name
    // $categoryName = $category->category->name;
        return view('admin.categories.index', compact('categories'));
    }

    // Show the form for creating a new user
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        
        return redirect()->route('admin.categories')->with('success', 'Category created successfully.');
    }

    // Display the specified user
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    // Show the form for editing the specified Category
    public function edit(Category $category)
    {
        return view('admin.Categories.create', compact('category'));
    }

    // Update the specified user in the database
    public function update(Request $request, Category $category)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete(); // Soft delete
        return redirect()->route('admin.categories')->with('success', 'Category soft-deleted successfully!');
    }

//     public function restore($id)
// {
//     $category = User::onlyTrashed()->findOrFail($id);
//     $category->restore(); // Restore the user
//     return redirect()->route('admin.users.trashed')->with('success', 'User restored successfully!');
// }
}
