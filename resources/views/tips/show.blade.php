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

        </div>

    </section>

@endsection