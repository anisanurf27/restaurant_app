<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('product')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        if ($product) {
            $cartItem = CartItem::firstOrNew(['product_id' => $product->id]);
            $cartItem->quantity += 1;
            $cartItem->save();
        }
        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        $cartItem = CartItem::find($id);
        if ($cartItem) {
            $cartItem->delete();
        }
        return redirect()->route('cart.index');
    }
}
