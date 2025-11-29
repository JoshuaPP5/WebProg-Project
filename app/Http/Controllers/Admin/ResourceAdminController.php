<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = Resource::all();
        return view('admin.resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required|in:article,video,tool',
            'url' => 'required|url',
            'description' => 'nullable',
        ]);

        Resource::create($validated);

        return redirect('/admin/resources')->with('success', 'Resource created successfully!');
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
    public function edit(Resource $resource)
    {
        return view('admin.resources.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required|in:article,video,tool',
            'url' => 'required|url',
            'description' => 'nullable',
        ]);

        $resource->update($validated);

        return redirect('/admin/resources')->with('success', 'Resource updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();

        return redirect('/admin/resources')->with('success', 'Resource deleted successfully!');
    }
}
