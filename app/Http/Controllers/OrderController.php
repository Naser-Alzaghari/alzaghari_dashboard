<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display a listing of users
    public function index()
    {
        $orders = Order::all();
        

    //     $order = Order::with('category')->findOrFail($id);

    // // Access the category name
    // $categoryName = $order->category->name;
        return view('admin.orders.index', compact('orders'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('admin.orders.create');
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
        
        Order::create([
            'user_id' => $request->user_id,
            'order_date' => $request->order_date,
            'status' => $request->status,
            'total_amount' => $request->total_amount,
            'payment_status' => $request->payment_status,
            'pickup_date' => $request->pickup_date,
        ]);

        
        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    // Display the specified user
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    // Show the form for editing the specified Order
    public function edit(Order $order)
    {
        return view('admin.orders.create', compact('order'));
    }

    // Update the specified user in the database
    public function update(Request $request, Order $order)
    {
        
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
        //     'stock' => 'required',
        //     'category_id' => 'required',
        //     'price' => 'required',
        // ]);


        $order->user_id = $request->user_id;
        $order->order_date = $request->order_date;
        $order->status = $request->status;
        $order->total_amount = $request->total_amount;
        $order->payment_status = $request->payment_status;
        $order->pickup_date = $request->pickup_date;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete(); // Soft delete
        return redirect()->route('orders.index')->with('success', 'Order soft-deleted successfully!');
    }

//     public function restore($id)
// {
//     $order = User::onlyTrashed()->findOrFail($id);
//     $order->restore(); // Restore the user
//     return redirect()->route('users.trashed')->with('success', 'User restored successfully!');
// }
}
