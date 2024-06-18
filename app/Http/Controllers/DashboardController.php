<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        // Get counts from the database
        $waitingReservations = Reservation::where('approval_by_admin', 0)->count();
        $approvedReservations = Reservation::where('approval_by_admin', 1)->count();
        $rejectedReservations = Reservation::where('approval_by_admin', 2)->count();
        $canceledReservations = Reservation::where('approval_by_admin', 3)->count();
        
        $menuCount = Menu::count();
        $categoryCount = Category::count();
        $orderCount = Order::count();
        $userCount = User::count();

        return view('admin.dashboard', compact(
            'waitingReservations',
            'approvedReservations',
            'rejectedReservations',
            'canceledReservations',
            'menuCount',
            'categoryCount',
            'orderCount',
            'userCount'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}