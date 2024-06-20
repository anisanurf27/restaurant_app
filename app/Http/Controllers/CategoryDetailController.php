<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryDetail;

class CategoryDetailController extends Controller
{
    public function index()
    {
        $categorydetails = CategoryDetail::all();
        return view('category-detail.index', compact('categorydetails'));
    }

    public function create()
    {
        return view('category-detail.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required',
            'country' => 'required',
            'description' => 'required',
            'slug' => 'required'
        ]);

        CategoryDetail::create($request->all());
        return redirect()->route('category-detail.index')->with('success', 'Category Detail created successfully.');
    }

    public function edit(CategoryDetail $categoryDetail)
    {
        return view('category-detail.edit', compact('categoryDetail'));
    }

    public function update(Request $request, CategoryDetail $categoryDetail)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required',
            'country' => 'required',
            'description' => 'required',
            'slug' => 'required'
        ]);

        $categoryDetail->update($request->all());
        return redirect()->route('category-detail.index')->with('success', 'Category Detail updated successfully.');
    }

    public function destroy(CategoryDetail $categoryDetail)
    {
        $categoryDetail->delete();
        return redirect()->route('category-detail.index')->with('success', 'Category Detail deleted successfully.');
    }
}
