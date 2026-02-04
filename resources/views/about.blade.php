@extends('layouts.app')

@section('title', 'About Us — Farmi')

@section('content')
<section class="max-w-7xl mx-auto px-6 md:px-12 py-16 grid md:grid-cols-2 gap-16 items-center">
  <!-- Text Content -->
  <div data-aos="fade-right">
    <h1 class="text-4xl font-extrabold mb-6 select-none">Our Story</h1>
    <p class="text-gray-700 leading-relaxed mb-6 text-lg">
      At Farmi, we bring the rich culinary traditions of Ethiopia to your fast-food experience. Rooted in authentic recipes and fresh, local ingredients, we offer a menu that celebrates bold flavors with the convenience you expect.
    </p>

    <p class="text-gray-700 leading-relaxed mb-8">
      Our passion for quality and heritage drives everything we do — from sourcing to serving. Each dish tells a story of Ethiopian farms, spices, and the vibrant culture behind every bite.
    </p>

    
    <a href="{{ url('/menu') }}" class="inline-block bg-[#22A55F] hover:bg-[#1C6B40] text-white font-semibold py-3 px-10 rounded-full shadow-lg transition transform hover:scale-105">
        Explore Our full Menu
      </a>
  </div>

  <!-- Image -->
  <div data-aos="zoom-in">
    <img src="{{ asset('images/farmi.jpg') }}" alt="Ethiopian kitchen" class="rounded-3xl shadow-lg object-cover w-full max-h-[450px]" />
  </div>
</section>

<section class="max-w-7xl mx-auto px-6 md:px-12 py-12 bg-farmi-sand rounded-3xl shadow-lg">
  <h2 class="text-3xl font-extrabold text-center mb-12 select-none" data-aos="fade-up">What Makes Us Different</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-farmi-dark">
    <div data-aos="fade-up" data-aos-delay="100" class="bg-white rounded-xl p-8 shadow-lg glass hover:shadow-2xl transition cursor-default">
      <div class="text-farmi-green text-5xl mb-4">
        <i class="fas fa-leaf"></i>
      </div>
      <h3 class="font-semibold text-xl mb-2">Farm Fresh Ingredients</h3>
      <p class="text-gray-700 leading-relaxed">
        We partner with local Ethiopian farmers to source only the freshest and most flavorful produce and spices.
      </p>
    </div>
    <div data-aos="fade-up" data-aos-delay="200" class="bg-white rounded-xl p-8 shadow-lg glass hover:shadow-2xl transition cursor-default">
      <div class="text-farmi-green text-5xl mb-4">
        <i class="fas fa-pepper-hot"></i>
      </div>
      <h3 class="font-semibold text-xl mb-2">Authentic Spice Blends</h3>
      <p class="text-gray-700 leading-relaxed">
        Our chefs craft bold spice blends like berbere and mitmita to give each dish its unique Ethiopian flavor.
      </p>
    </div>
    <div data-aos="fade-up" data-aos-delay="300" class="bg-white rounded-xl p-8 shadow-lg glass hover:shadow-2xl transition cursor-default">
      <div class="text-farmi-green text-5xl mb-4">
        <i class="fas fa-heart"></i>
      </div>
      <h3 class="font-semibold text-xl mb-2">Passion & Care</h3>
      <p class="text-gray-700 leading-relaxed">
        Every meal is prepared with love and attention, ensuring a fast yet quality experience.
      </p>
    </div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-6 md:px-12 py-16">
  <h2 class="text-3xl font-extrabold mb-8 text-center select-none" data-aos="fade-up">Meet Our Team</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">
    @php
      $team = [
        ['name' => 'Amanuel Gebru', 'role' => 'Head Chef', 'img' => 'https://source.unsplash.com/400x400/?chef,african'],
        ['name' => 'Selamawit Tesfaye', 'role' => 'Farm Liaison', 'img' => 'https://source.unsplash.com/400x400/?farmer,woman'],
        ['name' => 'Bereket Alemu', 'role' => 'Manager', 'img' => 'https://source.unsplash.com/400x400/?manager,ethiopian'],
        ['name' => 'Mulugeta Abebe', 'role' => 'Marketing', 'img' => 'https://source.unsplash.com/400x400/?marketing,african'],
      ];
    @endphp

    @foreach($team as $member)
      <div data-aos="fade-up" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition cursor-default">
        <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="w-full h-64 object-cover rounded-t-xl" />
        <div class="p-4 text-center">
          <h3 class="font-semibold text-lg mb-1">{{ $member['name'] }}</h3>
          <p class="text-gray-600">{{ $member['role'] }}</p>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
