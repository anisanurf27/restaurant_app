<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation.index',compact('reservations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cust_name' => 'required|string|max:255',
            'contact' => 'required|string|max:255|email',
            'reservation_date' => 'required|date',
            'number_guest' => 'required|integer|min:1',
            'special_request' => 'nullable|string|max:255',
        ]);

        Reservation::create([
            'cust_name' => $validated['cust_name'],
            'contact' => $validated['contact'],
            'reservation_date' => $validated['reservation_date'],
            'number_guest' => $validated['number_guest'],
            'special_request' => $validated['special_request'],
        ]);

        return response()->json(['message' => 'Reservation made successfully.']);
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
