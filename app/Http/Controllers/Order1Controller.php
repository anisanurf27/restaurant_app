<?php

namespace App\Http\Controllers;

use App\Models\Order1;
use App\Models\CartItem;
use App\Models\Laporan;
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

      public function edit($id)
    {
        $order = Order1::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'total_price' => 'required|numeric',
            'payment_method' => 'required|string|max:50',
        ]);

        $order = Order1::findOrFail($id);
        $order->update($request->except('_token'));

        return redirect()->route('admin.order')->with('success', 'Order updated successfully');
    }


    public function destroy($id)
    {
        $order = Order1::findOrFail($id);
        $order->delete();
        return redirect()->route('admin.order')->with('success', 'Order deleted successfully');
    }

    public function moveToReport(Order1 $order)
{
    // Simpan data order ke dalam tabel laporan
    Laporan::create([
        'name' => $order->name,
        'address' => $order->address,
        'email' => $order->email,
        'phone' => $order->phone,
        'total_price' => $order->total_price,
        'payment_method' => $order->payment_method,
        'created_at' => $order->created_at,
        'updated_at' => $order->updated_at,
    ]);

    // Hapus order dari tabel order
    $order->delete();

    return redirect()->route('dashboard')->with('success', 'Order moved to report successfully!');
}

}
