<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Home page with featured items
Route::get('/', function () {
    $featured = [
        [
            'id' => 1,
            'name' => 'Tibs Sandwich',
            'price' => '90 ETB',
            'img' => 'https://source.unsplash.com/800x600/?ethiopian,food',
            'desc' => 'Spiced beef tibs in a toasted bun with pickled onions.',
        ],
        [
            'id' => 2,
            'name' => 'Berbere Chicken Wrap',
            'price' => '75 ETB',
            'img' => 'https://source.unsplash.com/800x600/?chicken,wrap',
            'desc' => 'Chicken marinated with berbere, rolled with fresh greens.',
        ],
        [
            'id' => 3,
            'name' => 'Injera Taco',
            'price' => '65 ETB',
            'img' => 'https://source.unsplash.com/800x600/?injera,wrap',
            'desc' => 'A playful take — injera base, fresh toppings.',
        ],
    ];

    return view('home', compact('featured'));
});

// Menu page with items and categories
Route::get('/menu', function () {
    $menu = [
        [
            'id' => 101,
            'name' => 'Tibs Sandwich',
            'category' => 'Sandwich',
            'price' => 90,
            'currency' => 'ETB',
            'tags' => ['spicy'],
            'img' => 'https://source.unsplash.com/800x600/?ethiopian,meat',
            'desc' => 'Charred beef tibs, onion, tomato, pickles.',
        ],
        [
            'id' => 102,
            'name' => 'Berbere Chicken Wrap',
            'category' => 'Wrap',
            'price' => 75,
            'currency' => 'ETB',
            'tags' => ['spicy'],
            'img' => 'https://source.unsplash.com/800x600/?chicken,ethiopian',
            'desc' => 'Grilled chicken tossed in berbere spice.',
        ],
        [
            'id' => 103,
            'name' => 'Veggie Platter',
            'category' => 'Vegetarian',
            'price' => 55,
            'currency' => 'ETB',
            'tags' => ['veg'],
            'img' => 'https://source.unsplash.com/800x600/?vegetarian,plate',
            'desc' => 'Seasonal veggies, lentil salad, injera chips.',
        ],
        [
            'id' => 104,
            'name' => 'Loaded Fries',
            'category' => 'Sides',
            'price' => 45,
            'currency' => 'ETB',
            'tags' => ['cheese'],
            'img' => 'https://source.unsplash.com/800x600/?fries,loaded',
            'desc' => 'Crinkle fries with cheese, herbs, chili oil.',
        ],
        [
            'id' => 105,
            'name' => 'Ethiopian Coffee Shake',
            'category' => 'Drinks',
            'price' => 40,
            'currency' => 'ETB',
            'tags' => ['sweet'],
            'img' => 'https://source.unsplash.com/800x600/?coffee,shake',
            'desc' => 'Cold coffee shake inspired by coffee ceremony notes.',
        ],
        [
            'id' => 106,
            'name' => 'Spiced Lentil Bowl',
            'category' => 'Bowls',
            'price' => 60,
            'currency' => 'ETB',
            'tags' => ['veg', 'healthy'],
            'img' => 'https://source.unsplash.com/800x600/?lentil,bowl',
            'desc' => 'Red lentils, herbs, and seasonal veg.',
        ],
    ];

    $categories = collect($menu)->pluck('category')->unique()->values()->all();

    return view('menu', compact('menu', 'categories'));
});

// About page route
Route::get('/about', function () {
    return view('about');
});

// Services page route (new, replacing old contact page)
Route::get('/services', function () {
    // Detailed rich service info, pass data to the view
    $services = [
        [
            'title' => 'Gym & Fitness Center',
        'image' => asset('images/gym.jpeg'),  // <-- corrected here
            'description' => 'State-of-the-art gym facilities equipped with the latest fitness equipment. Personal trainers and group classes designed to help you meet your fitness goals efficiently and safely.',
            'features' => [
                'Modern cardio and strength equipment',
                'Personalized training programs',
                'Group yoga and HIIT classes',
                'Nutritional guidance and support',
            ],
        ],
        [
            'title' => 'Professional Massage Therapy',
        'image' => asset('images/massagee.jpeg'),  // <-- corrected here
            'description' => 'Relax and rejuvenate with our expert massage therapists. We offer various massage styles including deep tissue, Swedish, and aromatherapy to ease muscle tension and promote wellness.',
            'features' => [
                'Certified massage therapists',
                'Customizable massage sessions',
                'Calming ambiance with essential oils',
                'Health benefits including pain relief and stress reduction',
            ],
        ],
        [
            'title' => 'Ethiopian Food Service',
        'image' => asset('images/ethiopian-food.jpg'),  // <-- corrected here
            'description' => 'Delicious, authentic Ethiopian cuisine served fresh. From traditional injera with flavorful wats to quick sandwiches and wraps, enjoy fast, healthy, and tasty meals inspired by Ethiopian culinary heritage.',
            'features' => [
                'Fresh and locally sourced ingredients',
                'Quick service for busy customers',
                'Variety of vegetarian and meat options',
                'Catering available for events',
            ],
        ],
        [
            'title' => 'Foreign Food Service',
        'image' => asset('images/Burger.jpg'),  // <-- corrected here
            'description' => 'Delicious, authentic Ethiopian cuisine served fresh. From traditional injera with flavorful wats to quick sandwiches and wraps, enjoy fast, healthy, and tasty meals inspired by Ethiopian culinary heritage.',
            'features' => [
                'Fresh and locally sourced ingredients',
                'Quick service for busy customers',
                'Variety of vegetarian and meat options',
                'Catering available for events',
            ],
        ],
    ];

    return view('services', compact('services'));
});


// Contact page routes
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:6',
    ]);

    // Demo: no mail sent, replace with real mail logic in production

    return back()->with('success', 'Thanks — your message has been received (demo).');
});
