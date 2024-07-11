<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_Item;
use App\Models\Transaction;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function checkout()
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        $cartItems = $user->cartItems()->with('product')->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error_message', 'Your cart is empty.');
        }

        $subTotal = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->product->price;
        });
        $total = $subTotal; // Include shipping or other fees as needed

        return view('front.checkout', compact('cartItems', 'subTotal', 'total'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'billing_address' => 'required|string',
            'order_notes' => 'nullable|string',
            'payment_option' => 'required|string',
        ]);

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        $cartItems = $user->cartItems()->with('product')->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error_message', 'Your cart is empty.');
        }

        DB::transaction(function () use ($request, $cartItems) {
            $total = $cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->product->price;
            });

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'billing_address' => $request->input('billing_address'),
                'order_notes' => $request->input('order_notes'),
                'payment_option' => $request->input('payment_option'),
                'total' => $total,
            ]);

            foreach ($cartItems as $cartItem) {
                order_item::create([
                    'order_id' => $order->id,
                    'product_id' => $cartItem->product_id,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->product->price,
                ]);
            }

            // Create the transaction record
            transaction::create([
                'order_id' => $order->id,
                'transaction_id' => 'TXN' . strtoupper(uniqid()), // Replace with actual transaction ID from payment gateway
                'amount' => $total,
                'status' => 'pending', // Change based on actual transaction status
            ]);

            // Clear the user's cart
            auth()->user()->cartItems()->delete();
        });

        return redirect()->route('done')->with('success_message', 'Your order has been placed successfully!');
    }
}