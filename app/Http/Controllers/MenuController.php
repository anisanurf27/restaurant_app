<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category; // Assuming you have a Category model

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('menu.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'slug' => 'required|string|max:255|unique:menus,slug',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Menu::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'category' => $validatedData['category'],
            'category_id' => $validatedData['category_id'],
            'slug' => $validatedData['slug'],
            'image' => $imagePath,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $categories = Category::all();
        return view('menu.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'slug' => 'required|string|max:255|unique:menus,slug,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        $menu->update($validatedData);

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}