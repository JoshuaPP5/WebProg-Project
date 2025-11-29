@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">

    <h1 class="text-2xl font-bold mb-4">Edit Resource</h1>

    <form method="POST" action="/admin/resources/{{ $resource->id }}">
        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text" name="title" class="w-full border p-2 mb-4"
               value="{{ $resource->title }}" required>

        <label>Type</label>
        <select name="type" class="w-full border p-2 mb-4" required>
            <option value="article" {{ $resource->type == 'article' ? 'selected' : '' }}>Article</option>
            <option value="video" {{ $resource->type == 'video' ? 'selected' : '' }}>Video</option>
            <option value="tool" {{ $resource->type == 'tool' ? 'selected' : '' }}>Tool</option>
        </select>

        <label>URL</label>
        <input type="url" name="url" class="w-full border p-2 mb-4"
               value="{{ $resource->url }}" required>

        <label>Description (optional)</label>
        <textarea name="description" class="w-full border p-2 mb-4">{{ $resource->description }}</textarea>

        <button class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
    </form>

</div>
@endsection
