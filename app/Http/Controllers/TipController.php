<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('q');
        $tips = Tip::where('title', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%")
                ->get();

        return view('tips.index', compact('tips', 'search'));
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
    public function show(Tip $tip)
    {
        $sort = request('sort', 'newest'); // default sorting

        $query = $tip->feedback();

        switch ($sort) {
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;

            case 'highest':
                $query->orderBy('rating', 'desc');
                break;

            case 'lowest':
                $query->orderBy('rating', 'asc');
                break;

            default: // newest
                $query->orderBy('created_at', 'desc');
        }

        $feedback = $query->paginate(5)->withQueryString();

        $average = round($tip->averageRating(), 1);

        return view('tips.show', compact('tip', 'feedback', 'average'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tip $tip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tip $tip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tip $tip)
    {
        //
    }
}
