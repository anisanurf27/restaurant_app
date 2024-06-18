<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $foods = Product::where('category', Product::CATEGORY_FOOD)->get();
        $drinks = Product::where('category', Product::CATEGORY_DRINK)->get();
        return view('products.index', compact('foods', 'drinks'));
    }
}

