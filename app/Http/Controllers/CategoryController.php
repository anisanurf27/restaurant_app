<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|unique:categories',
        ]);
    
        $category = Category::create($validatedData);
    
        return redirect()->route('category.index')
                         ->with('success', 'Category created successfully');
        
    }

    public function edit(ProductImage $productimage)
    {
        
    }

    public function update(Request $request, ProductImage $productimage)
    {
        
    }


    public function destroy($id)
    {

    }
}
