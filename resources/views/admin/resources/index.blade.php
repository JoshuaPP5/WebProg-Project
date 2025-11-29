@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">

    <h1 class="text-2xl font-bold mb-4">Manage Resources</h1>

    <a href="/admin/resources/create" class="px-4 py-2 bg-green-600 text-white rounded">Add New Resource</a>

    <table class="w-full mt-6 bg-white shadow rounded-lg">
        <tr class="bg-gray-200">
            <th class="p-3 text-left">Title</th>
            <th class="p-3 text-left">Type</th>
            <th class="p-3 text-left">URL</th>
            <th class="p-3 text-left">Actions</th>
        </tr>

        @foreach ($resources as $resource)
        <tr class="border-t">
            <td class="p-3">{{ $resource->title }}</td>
            <td class="p-3">{{ ucfirst($resource->type) }}</td>
            <td class="p-3">
                <a href="{{ $resource->url }}" target="_blank" class="text-blue-600 underline">
                    View
                </a>
            </td>
            <td class="p-3 flex gap-2">

                <a href="/admin/resources/{{ $resource->id }}/edit"
                   class="px-3 py-1 bg-blue-500 text-white rounded">Edit</a>

                <form action="/admin/resources/{{ $resource->id }}" method="POST"
                      onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button class="px-3 py-1 bg-red-600 text-white rounded">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach

    </table>

</div>
@endsection
