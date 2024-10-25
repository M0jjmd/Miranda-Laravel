<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('facilities')->where('status', 'available')->get();

        return view('rooms.index', compact('rooms'));
    }
    /**
     * Display single listing of the resource.
     */
    public function show(string $id)
    {
        $room = Room::with('facilities')->findOrFail($id);

        return view('rooms.show', compact('room'));
    }
}
