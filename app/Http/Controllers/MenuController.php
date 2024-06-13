<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class MenuController extends Controller
{
    public function index()
    {
        return view("menu.index");
    }
    
        
    public function create()
    {

    }


    public function store(Request $request)
    {
        
    }


    public function edit()
    {
    }

    public function update()
    {
        
    }


    public function destroy($id)
    {

    }
}
