<?php

namespace App\Http\Controllers\user;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);

        // Calculate the new cart item count
        $cartItemCount = array_sum(array_column($cart, 'quantity'));

        // Fetch product details
        $product = Product::with('images')->find($productId);
        
        return response()->json([
            'cartItemCount' => $cartItemCount,
            'product' => $product,
            'quantity' => (int)$quantity,
            'total' => $this->calculateTotal($cart)
        ]);
    }

    public function viewCart()
    {
        // Retrieve cart data from session
        $cart = session()->get('cart', []);

        // Fetch product details based on product IDs in the cart
        $productIds = array_keys($cart);
        $products = Product::whereIn('id', $productIds)->get();

        // Combine products with their quantities from the cart
        $cartItems = $products->map(function ($product) use ($cart) {
            return [
                'product' => $product,
                'quantity' => $cart[$product->id]['quantity'],
            ];
        });

        $total = $this->calculateTotal($cart);

        return view('user.cart', compact('cartItems', 'total'));
    }

    public function updateQuantity(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        $cartItemCount = array_sum(array_column($cart, 'quantity'));

        return response()->json([
            'cartItemCount' => $cartItemCount,
            'quantity' => $cart[$productId]['quantity'],
            'total' => $this->calculateTotal($cart)
        ]);
    }

    public function updateTotal()
    {
        $cart = session()->get('cart', []);
        return response()->json([
            'total' => $this->calculateTotal($cart)
        ]);
    }

    public function removeItem(Request $request)
    {
        $productId = $request->input('product_id');

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        $cartItemCount = array_sum(array_column($cart, 'quantity'));

        return response()->json([
            'cartItemCount' => $cartItemCount,
            'total' => $this->calculateTotal($cart)
        ]);
    }

    private function calculateTotal($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $product = Product::find($item['product_id']);
            $total += $product->price * $item['quantity'];
        }
        return number_format($total, 2);
    }
}
