@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">

    <h1 class="text-2xl font-bold mb-4">User Feedback</h1>

    <table class="w-full bg-white shadow rounded-lg">
        <tr class="bg-gray-200">
            <th class="p-3 text-left">Tip</th>
            <th class="p-3 text-left">Rating</th>
            <th class="p-3 text-left">Comment</th>
            <th class="p-3 text-left">Date</th>
            <th class="p-3 text-left">Actions</th>
        </tr>

        @foreach($feedback as $fb)
        <tr class="border-t">
            <td class="p-3">{{ $fb->tip->title }}</td>
            <td class="p-3">{{ $fb->rating }}</td>
            <td class="p-3">{{ $fb->comment ?? '-' }}</td>
            <td class="p-3 text-sm">{{ $fb->created_at->format('M d, Y') }}</td>
            <td class="p-3">

                <form action="/admin/feedback/{{ $fb->id }}" method="POST"
                      onsubmit="return confirm('Delete this feedback?');">
                    @csrf
                    @method('DELETE')
                    <button class="px-3 py-1 bg-red-600 text-white rounded">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

    <div class="mt-4">
        {{ $feedback->links() }}
    </div>

</div>
@endsection
