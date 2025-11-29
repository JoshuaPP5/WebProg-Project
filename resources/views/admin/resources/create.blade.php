@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">

    <h1 class="text-2xl font-bold mb-4">Add New Resource</h1>

    <form method="POST" action="/admin/resources">
        @csrf

        <label>Title</label>
        <input type="text" name="title" class="w-full border p-2 mb-4" required>

        <label>Type</label>
        <select name="type" class="w-full border p-2 mb-4" required>
            <option value="article">Article</option>
            <option value="video">Video</option>
            <option value="tool">Tool</option>
        </select>

        <label>URL</label>
        <input type="url" name="url" class="w-full border p-2 mb-4" required>

        <label>Description (optional)</label>
        <textarea name="description" class="w-full border p-2 mb-4"></textarea>

        <button class="px-4 py-2 bg-green-600 text-white rounded">Save</button>
    </form>

</div>
@endsection
