@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="bg-green-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold mb-4">
            SDG 7: Affordable & Clean Energy
        </h2>
        <p class="text-lg mb-6 max-w-2xl mx-auto">
            Learn how small daily actions can contribute to big energy savings.
            Explore practical clean energy tips that help protect our planet.
        </p>

        <a href="/tips"
            class="px-6 py-3 bg-white text-green-700 font-semibold rounded-lg shadow hover:bg-gray-100 transition">
            Explore Tips
        </a>
    </div>
</section>

{{-- Search Section --}}
<section class="py-14">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <h3 class="text-2xl font-bold mb-4">Search for Clean Energy Tips</h3>

        @include('components.searchbar')
    </div>
</section>

{{-- SDG 7 Overview Cards --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-3 text-gray-900">Why Clean Energy Matters</h2>
            <p class="text-gray-500">Discover the benefits of switching to renewable sources</p>
        </div>

        {{-- Grid --}}
<div class="grid md:grid-cols-3 gap-8">
            
    {{-- Card 1: Reduce Emissions --}}
    <div class="relative h-96 rounded-2xl overflow-hidden shadow-lg group cursor-pointer">
        
        {{-- 1. Background Image (Zooms on hover) --}}
        <img src={{asset('images\back-view-man-holding-his-mask-up.jpg')}}
             alt="Reduce Emissions" 
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        
        {{-- 2. Dark Overlay (Initially invisible, fades in on hover) --}}
        <div class="absolute inset-0 bg-black/60 opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

        {{-- 3. Content Container (Anchored to bottom) --}}
        <div class="absolute bottom-0 left-0 w-full p-6 text-white translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
            
            {{-- Title (Always visible, moves up slightly on hover) --}}
            <h3 class="text-xl font-bold uppercase tracking-wide drop-shadow-md group-hover:drop-shadow-none transition-all">
                Reduce Emissions
            </h3>

            {{-- Hidden Content (Expands upwards on hover) --}}
            <div class="overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out group-hover:max-h-40 group-hover:opacity-100">
                <p class="text-sm text-gray-200 mt-3 mb-4">
                    Clean energy reduces greenhouse gases and helps fight climate change effectively.
                </p>
                <a href="#" class="inline-block px-4 py-2 border border-white rounded-full text-sm font-semibold hover:bg-white hover:text-black transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    {{-- Card 2: Save Money --}}
    <div class="relative h-96 rounded-2xl overflow-hidden shadow-lg group cursor-pointer">
        <img src= {{ asset('images\close-up-education-economy-objects.jpg')}}
             alt="Save Money" 
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        
        <div class="absolute inset-0 bg-black/60 opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

        <div class="absolute bottom-0 left-0 w-full p-6 text-white translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
            <h3 class="text-xl font-bold uppercase tracking-wide drop-shadow-md group-hover:drop-shadow-none transition-all">
                Save Money
            </h3>
            <div class="overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out group-hover:max-h-40 group-hover:opacity-100">
                <p class="text-sm text-gray-200 mt-3 mb-4">
                    Energy-efficient habits and technologies reduce your electricity bill significantly over time.
                </p>
                <a href="#" class="inline-block px-4 py-2 border border-white rounded-full text-sm font-semibold hover:bg-white hover:text-black transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    {{-- Card 3: Sustainable Future --}}
    <div class="relative h-96 rounded-2xl overflow-hidden shadow-lg group cursor-pointer">
        <img src="{{ asset('images/tea-leaf-field.jpg') }}" 
             alt="Sustainable Future" 
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        
        <div class="absolute inset-0 bg-black/60 opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

        <div class="absolute bottom-0 left-0 w-full p-6 text-white translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
            <h3 class="text-xl font-bold uppercase tracking-wide drop-shadow-md group-hover:drop-shadow-none transition-all">
                Sustainable Future
            </h3>
            <div class="overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out group-hover:max-h-40 group-hover:opacity-100">
                <p class="text-sm text-gray-200 mt-3 mb-4">
                    Clean energy supports long-term sustainability and a healthier planet for future generations.
                </p>
                <a href="#" class="inline-block px-4 py-2 border border-white rounded-full text-sm font-semibold hover:bg-white hover:text-black transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>

</div>
@endsection