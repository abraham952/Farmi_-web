@extends('layouts.app')

@section('title', 'Menu — Farmi')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-16 bg-white rounded-lg shadow-lg text-gray-800">
  <h1 class="text-5xl font-extrabold text-center mb-6 text-yellow-600 select-none" data-aos="fade-down">
    Our Menu
  </h1>
  <p class="text-center text-gray-600 mb-12 max-w-xl mx-auto" data-aos="fade-up">
    Discover the rich flavors of Ethiopia — traditional dishes crafted with love and heritage.
  </p>

  @php
    $menu = [
      ['name' => 'Doro Wat (ዶሮ ወጥ)', 'price' => '120 ETB', 'desc' => 'Spicy chicken stew simmered in berbere sauce.', 'img' => 'Burger.jpg'],
      ['name' => 'Injera (እንጀራ)', 'price' => '50 ETB', 'desc' => 'Traditional sourdough flatbread served with stews.', 'img' => 'doro.jpg'],
      ['name' => 'Kitfo (ክትፎ)', 'price' => '150 ETB', 'desc' => 'Minced raw beef with spices and clarified butter.', 'img' => 'ethiopian-food.jpg'],
      ['name' => 'Shiro Wat (ሺሮ ወጥ)', 'price' => '100 ETB', 'desc' => 'Rich chickpea stew cooked with garlic and spices.', 'img' => 'shiro.jpeg'],
      ['name' => 'Tibs (ጥብስ)', 'price' => '130 ETB', 'desc' => 'Sautéed beef or lamb with onions and peppers.', 'img' => 'awaze-tibs.jpg'],
      ['name' => 'Coffee Ceremony (ቡና ሥነ ሥርዓት)', 'price' => '80 ETB', 'desc' => 'Traditional Ethiopian coffee served with popcorn.', 'img' => 'ethiopian-coffee.jpg'],
    ];
  @endphp

  <div class="grid gap-10 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
    @foreach($menu as $item)
      <div
        class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-200 transform hover:shadow-xl hover:-translate-y-1 transition duration-300"
        data-aos="fade-up"
        data-aos-delay="{{ $loop->index * 100 + 100 }}"
      >
        <img
          src="{{ asset('images/' . $item['img']) }}"
          alt="{{ $item['name'] }}"
          class="w-full h-56 object-cover object-center"
          loading="lazy"
        />
        <div class="p-6">
          <h3 class="text-2xl font-semibold mb-1 text-yellow-600">{{ $item['name'] }}</h3>
          <p class="text-gray-600 mb-3 italic">{{ $item['desc'] }}</p>
          <p class="text-yellow-600 font-semibold text-lg">{{ $item['price'] }}</p>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
