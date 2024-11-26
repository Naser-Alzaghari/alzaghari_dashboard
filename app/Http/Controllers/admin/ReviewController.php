<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Display a listing of reviews
    public function index()
    {
        $reviews = Review::all();
        return view('admin.reviews', compact('reviews'));
    }

    // Show the form for creating a new review
    

   

    // Display the specified review
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    

    

    // Remove the specified review from the database
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete(); // Soft delete
        return redirect()->route('admin.reviews')->with('success', 'review soft-deleted successfully!');
    }

    public function toggle(Request $request, Review $review){
        
        $review->is_active ? $review->is_active = 0 : $review->is_active = 1;
        
        $review->save();

        return redirect()->route('admin.reviews')->with('success', 'review updated successfully.');
    }


//     public function restore($id)
// {
//     $review = review::onlyTrashed()->findOrFail($id);
//     $review->restore(); // Restore the review
//     return redirect()->route('admin.reviews.trashed')->with('success', 'review restored successfully!');
// }
}
