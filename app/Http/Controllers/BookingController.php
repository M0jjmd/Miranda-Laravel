<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->id())->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'special_request' => 'nullable|string|max:255',
        ]);

        $booking = new Booking($validated);
        $booking->user_id = auth()->id();
        $booking->order_date = now();
        $booking->status = 'checked-in';
        $booking->save();

        $room = Room::findOrFail($request->room_id);
        $room->status = 'booked';
        $room->save();

        return redirect()->route('bookings.index')->with('success', 'Booking created and room marked as booked.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $room = $booking->room;
        $room->status = 'available';
        $room->save();

        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted and room is now available.');
    }
}
