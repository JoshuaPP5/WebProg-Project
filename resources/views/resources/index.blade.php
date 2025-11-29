@extends('layouts.app')

@section('content')

    {{-- Header --}}
    <section class="bg-green-600 text-white py-10">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-4xl font-extrabold mb-2">
                Educational Resources
            </h1>
            <p class="text-sm md:text-base text-green-100">
                Learn more about clean and affordable energy through curated articles, videos, and tools.
            </p>
        </div>
    </section>

    {{-- Resources List --}}
    <section class="max-w-6xl mx-auto px-6 py-10">

        @if($resources->count() === 0)
            <p class="text-center text-gray-600 text-lg">
                No resources available yet.
            </p>
        @else

            <div class="grid md:grid-cols-2 gap-8">

                @foreach($resources as $resource)
                    <div class="bg-white rounded-2xl shadow p-6 flex flex-col justify-between">

                        {{-- Type badge --}}
                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                                     bg-green-100 text-green-700 mb-3">
                            {{ ucfirst($resource->type) }}
                        </span>

                        {{-- Title --}}
                        <h2 class="text-xl font-bold text-gray-800 mb-2">
                            {{ $resource->title }}
                        </h2>

                        {{-- Description --}}
                        <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                            {{ $resource->description }}
                        </p>

                        {{-- Link --}}
                        <a href="{{ $resource->url }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="mt-auto inline-flex items-center gap-2 text-sm font-semibold
                                  text-green-700 hover:text-green-800">
                            Open Resource
                            <span class="text-lg">↗</span>
                        </a>

                    </div>
                @endforeach

            </div>

        @endif

    </section>

@endsection