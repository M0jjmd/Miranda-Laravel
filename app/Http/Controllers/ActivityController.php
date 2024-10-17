<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $data['paid'] = $request->has('paid');

        Activity::create($data);

        return redirect()->route('activities.index')->with('success', 'Activity created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);

        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $data['paid'] = $request->has('paid') ? true : false;

        $activity = Activity::findOrFail($id);
        $activity->update($data);

        return redirect()->route('activities.index')->with('success', 'Activity updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully.');
    }
}
