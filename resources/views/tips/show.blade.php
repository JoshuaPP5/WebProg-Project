@extends('layouts.app')

@section('content')

    {{-- Header / Breadcrumb --}}
    <section class="bg-green-600 text-white py-10">
        <div class="max-w-5xl mx-auto px-6">
            <a href="/tips" class="text-sm underline hover:no-underline">
                ← Back to Tips
            </a>

            <h1 class="text-3xl md:text-4xl font-extrabold mt-3">
                {{ $tip->title }}
            </h1>
            <p class="mt-2 text-sm md:text-base text-green-100">
                Detailed view · Clean Energy Tip
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="max-w-5xl mx-auto px-6 py-10">

        <div class="bg-white rounded-2xl shadow p-6 md:p-8 space-y-6">

            {{-- Image (optional) --}}
            @if($tip->image)
                <img src="{{ asset('storage/' . $tip->image) }}"
                     alt="{{ $tip->title }}"
                     class="w-full max-h-72 object-cover rounded-xl mb-4">
            @endif

            {{-- Description --}}
            <div>
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Description</h2>
                <p class="text-gray-700 leading-relaxed">
                    {{ $tip->description }}
                </p>
            </div>

            {{-- Benefits --}}
            @if(!empty($tip->benefits))
                <div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-800">Benefits</h2>

                    @php
                        // If benefits are stored as plain text with line breaks
                        $benefitsLines = preg_split("/\\r\\n|\\r|\\n/", $tip->benefits);
                    @endphp

                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        @foreach($benefitsLines as $line)
                            @if(trim($line) !== '')
                                <li>{{ $line }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Energy Savings --}}
            @if(!empty($tip->energy_saving))
                <div class="bg-green-50 border border-green-200 rounded-xl p-4 md:p-5">
                    <h2 class="text-lg font-semibold text-green-800 mb-1">
                        Estimated Energy Savings
                    </h2>
                    <p class="text-green-900 text-sm md:text-base">
                        {{ $tip->energy_saving }}
                    </p>
                </div>
            @endif

            {{-- Actions --}}
            <div class="flex flex-col md:flex-row gap-3 md:gap-4 mt-4">

                {{-- Learn More -> Educational resources --}}
                <a href="/resources"
                   class="inline-flex items-center justify-center px-5 py-3 rounded-lg
                          bg-green-600 text-white text-sm font-semibold hover:bg-green-700 shadow">
                    Learn More About Clean Energy
                </a>

                {{-- Rate this tip -> Feedback page --}}
                <a href="/feedback/{{ $tip->id }}"
                   class="inline-flex items-center justify-center px-5 py-3 rounded-lg
                          border border-green-600 text-green-700 text-sm font-semibold
                          hover:bg-green-50">
                    Rate This Tip
                </a>
            </div>

            {{-- Feedback Section --}}
            <div class="mt-10 bg-gray-50 rounded-xl p-6 border">

                <h2 class="text-2xl font-bold mb-4">User Feedback</h2>

                {{-- Average Rating --}}
                @if($average)
                    <div class="flex items-center gap-1 mb-6">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="{{ $i <= $average ? 'text-yellow-400' : 'text-gray-300' }}">
                                ★
                            </span>
                        @endfor
                        <span class="text-gray-700 text-lg font-semibold">
                            {{ $average }}/5
                        </span>
                    </div>
                @endif

                {{-- Sorting --}}
                <div class="flex justify-end mb-4">
                    <form>
                        <label class="text-gray-700 font-semibold mr-2">Sort by:</label>
                        <select name="sort" onchange="this.form.submit()" 
                                class="border rounded p-2 text-sm">
                            <option value="newest" {{ request('sort')=='newest'?'selected':'' }}>Newest</option>
                            <option value="oldest" {{ request('sort')=='oldest'?'selected':'' }}>Oldest</option>
                            <option value="highest" {{ request('sort')=='highest'?'selected':'' }}>Highest Rating</option>
                            <option value="lowest" {{ request('sort')=='lowest'?'selected':'' }}>Lowest Rating</option>
                        </select>
                    </form>
                </div>

                {{-- Feedback List --}}
                @if($feedback->count() > 0)
                    <div class="space-y-4">

                        @foreach($feedback as $fb)
                            <div class="bg-white p-4 rounded-xl shadow">

                                {{-- Stars --}}
                                <div class="flex items-center gap-1 mb-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span class="{{ $i <= $fb->rating ? 'text-yellow-400' : 'text-gray-300' }}">
                                            ★
                                        </span>
                                    @endfor
                                    <span class="text-sm text-gray-600">({{ $fb->rating }})</span>
                                </div>

                                {{-- Comment --}}
                                @if($fb->comment)
                                    <p class="text-gray-700">{{ $fb->comment }}</p>
                                @endif

                                <p class="text-xs text-gray-400 mt-2">{{ $fb->created_at->diffForHumans() }}</p>
                            </div>
                        @endforeach

                        {{-- PAGINATION --}}
                        <div class="mt-6">
                            {{ $feedback->links() }}
                        </div>

                    </div>
                @else
                    <p class="text-gray-600">No feedback yet. Be the first to rate this tip!</p>
                @endif

            </div>
        </div>

    </section>

@endsection