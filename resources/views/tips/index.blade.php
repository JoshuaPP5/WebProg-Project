@extends('layouts.app')

@section('content')

    {{-- Header --}}
    <header class="bg-green-600 text-white text-center py-14">
        <h2 class="text-3xl font-extrabold mb-2">Clean Energy Tips</h2>
        <p class="text-lg">Browse practical and simple ways to save energy.</p>
    </header>

    {{-- Search Bar --}}
    <section class="max-w-3xl mx-auto px-6 mt-10">
        @include('components.searchbar')
    </section>

    {{-- Tips Grid --}}
    <section class="max-w-7xl mx-auto px-6 my-14">
        
        @if($tips->count() == 0)

            {{-- Show only if user searched --}}
            @if(request('q'))
                <p class="text-center text-gray-600 text-lg">
                    No tips found for "<span class="font-semibold">{{ request('q') }}</span>".
                </p>
            @else
                <p class="text-center text-gray-600 text-lg">
                    No tips available yet.
                </p>
            @endif

        @else

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($tips as $tip)
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">

                        {{-- Tip image if available --}}
                        @if($tip->image)
                            <img src="{{ asset('storage/' . $tip->image) }}"
                                 class="w-full h-40 object-cover rounded-lg mb-4">
                        @endif

                        {{-- Tip Title --}}
                        <h3 class="text-xl font-bold mb-2 text-green-700">
                            {{ $tip->title }}
                        </h3>

                        {{-- Short Description --}}
                        <p class="text-gray-700 text-sm mb-4">
                            {{ Str::limit($tip->description, 100) }}
                        </p>

                        {{-- More Button --}}
                        <a href="/tips/{{ $tip->id }}"
                           class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700 shadow">
                            View Details
                        </a>

                    </div>
                @endforeach

            </div>

        @endif

    </section>

@endsection