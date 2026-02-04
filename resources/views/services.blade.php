@extends('layouts.app')

@section('title', 'Services - Farmi')

@section('content')
<section class="max-w-7xl mx-auto px-6 md:px-12 py-20">
    <h1 class="text-4xl font-extrabold text-center mb-12 select-none text-[#A41E1E]" data-aos="fade-down">
        Our Premium Services
    </h1>

    <div class="space-y-20">
        @foreach($services as $service)
        <article class="flex flex-col md:flex-row items-center gap-12" data-aos="fade-up">
            <!-- Image -->
            <div class="md:w-1/2 rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition duration-500">
                <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-64 object-cover" />
            </div>

            <!-- Text -->
            <div class="md:w-1/2">
                <h2 class="text-3xl font-extrabold mb-4 text-[#228B22]">{{ $service['title'] }}</h2>
                <p class="text-gray-700 mb-6 leading-relaxed max-w-xl">
                    {{ $service['description'] }}
                </p>
                <ul class="list-disc list-inside space-y-2 text-gray-600 max-w-xl">
                    @foreach($service['features'] as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
        </article>
        @endforeach
    </div>
</section>
@endsection
