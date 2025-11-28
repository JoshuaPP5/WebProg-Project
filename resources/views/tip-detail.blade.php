<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tip->title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    {{-- Navbar --}}
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-green-600">Clean Energy Tips</h1>
            <div class="space-x-6 text-gray-700">
                <a href="/" class="hover:text-green-600">Home</a>
                <a href="/tips" class="hover:text-green-600">Tips</a>
                <a href="/resources" class="hover:text-green-600">Resources</a>
            </div>
        </div>
    </nav>

    {{-- Tip Detail --}}
    <section class="max-w-4xl mx-auto px-6 py-12">
        
        <h2 class="text-4xl font-bold text-green-700 mb-4">{{ $tip->title }}</h2>

        {{-- Description --}}
        <div class="bg-white p-6 rounded-xl shadow mb-6">
            <h3 class="text-xl font-semibold mb-2">Description</h3>
            <p class="text-gray-700 leading-relaxed">{{ $tip->description }}</p>
        </div>

        {{-- Benefits --}}
        <div class="bg-white p-6 rounded-xl shadow mb-6">
            <h3 class="text-xl font-semibold mb-2">Benefits</h3>
            <p class="text-gray-700 leading-relaxed">{{ $tip->benefits }}</p>
        </div>

        {{-- Energy Savings --}}
        <div class="bg-white p-6 rounded-xl shadow mb-8">
            <h3 class="text-xl font-semibold mb-2">Energy Savings</h3>
            <p class="text-gray-700 leading-relaxed">{{ $tip->energy_saving }}</p>
        </div>

        {{-- Action Buttons --}}
        <div class="flex gap-4">
            <a href="/resources"
                class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 shadow">
                Learn More
            </a>

            <a href="/feedback/{{ $tip->id }}"
                class="px-6 py-3 bg-gray-700 text-white rounded-lg hover:bg-gray-800 shadow">
                Give Feedback
            </a>
        </div>

    </section>

</body>
</html>
