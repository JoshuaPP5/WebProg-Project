<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Tips List</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    {{-- Navbar --}}
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-green-600">Clean Energy Tips</h1>
            <div class="space-x-6 text-gray-700">
                <a href="/" class="hover:text-green-600">Home</a>
                <a href="/tips" class="hover:text-green-600 font-semibold">Tips</a>
                <a href="/resources" class="hover:text-green-600">Resources</a>
            </div>
        </div>
    </nav>

    {{-- Search Bar --}}
    <section class="max-w-6xl mx-auto px-6 py-10">
        <h2 class="text-3xl font-bold mb-4">Energy Tips</h2>

        <form action="/tips" method="GET" class="flex gap-3 mb-6">
            <input type="text" name="q"
                class="w-full px-4 py-3 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                placeholder="Search tips..." value="{{ request()->q }}">
            <button class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 shadow">
                Search
            </button>
        </form>

        {{-- Tips List --}}
        <div class="grid md:grid-cols-3 gap-8">

            @forelse ($tips as $tip)
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2 text-green-700">{{ $tip->title }}</h3>

                    <p class="text-gray-600 text-sm mb-4">
                        {{ Str::limit($tip->description, 120) }}
                    </p>

                    <a href="/tips/{{ $tip->id }}"
                        class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                        View Details
                    </a>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500 text-lg">
                    No tips found for your search.
                </p>
            @endforelse

        </div>
    </section>

</body>
</html>
