<?php

namespace App\Http\Controllers;

use App\Models\Order1;
use App\Models\CartItem;
use Illuminate\Http\Request;

class Order1Controller extends Controller
{
    public function index()
    {
        $orders = Order1::all(); // Fetch all orders from order1s table
        return view('order.index', compact('orders')); // Pass the data to the view
    }
    public function showCheckoutForm()
    {
        // Hitung total harga dari keranjang
        $cartItems = CartItem::all();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('checkout', compact('totalPrice'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'total_price' => 'required|numeric',
            'payment_method' => 'required|string|max:50',
        ]);

        $order = new Order1();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->total_price = $request->total_price;
        $order->payment_method = $request->payment_method;
        $order->save();

        // Kosongkan keranjang setelah berhasil checkout
        CartItem::truncate();

        return redirect()->route('checkout.form')->with('success', 'Order placed successfully!');
    }
}