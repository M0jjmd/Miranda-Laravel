<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'subject' => 'required|string|max:255',
                'comment' => 'required|string',
            ]);

            Contact::create([
                'date' => now(),
                'subject' => $validated['subject'],
                'comment' => $validated['comment'],
                'archive' => false,
            ]);

            return redirect()->back()->with([
                'message' => 'Message successfully sent',
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Error: ' . $e->getMessage(),
                'alert-type' => 'error',
            ]);
        }
    }
}
