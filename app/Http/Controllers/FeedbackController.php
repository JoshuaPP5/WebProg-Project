<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Tip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tip_id)
    {
        $tip = Tip::findOrFail($tip_id);
        return view('feedback.create', compact('tip'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tip_id' => 'required|exists:tips,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|max:500',
        ]);

        Feedback::create($validated);

        return redirect('/tips/' . $request->tip_id)
               ->with('success', 'Thank you for your feedback!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
