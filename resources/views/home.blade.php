@extends('layouts.app')

@section('title', 'Home - Farmi')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#D42F21] to-[#7B1E0A] text-white py-24 px-6 md:px-12 overflow-hidden">
  <div class="max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center gap-12">
    <!-- Text -->
    <div data-aos="fade-right" class="md:w-1/2">
      <h1 id="hero-title" class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 select-none drop-shadow-lg">
        Farm to Fast Food — Ethiopian Flavor, Fast & Fresh
      </h1>
      <p id="hero-desc" class="text-lg md:text-xl mb-6 max-w-xl leading-relaxed opacity-90">
        Experience authentic Ethiopian-inspired fast food crafted with fresh, local ingredients. 
        Quick, delicious, and full of soul.
      </p>
      <a id="hero-btn" href="{{ url('/menu') }}" 
         class="inline-block bg-[#F59E0B] hover:bg-[#FBBF24] text-[#2F1A00] font-bold py-3 px-8 rounded-full shadow-lg transition transform hover:scale-105">
        Explore Our Menu
      </a>
    </div>
    <!-- Image -->
    <div data-aos="fade-left" class="md:w-1/2">
      <img src="{{ asset('images/farmii.jpg') }}" 
           alt="Ethiopian food plate" 
           class="rounded-2xl shadow-xl object-cover w-full h-[320px] md:h-[400px] transform hover:scale-105 transition duration-500" />
    </div>
  </div>

  <!-- Decorative Circles -->
  <div class="absolute -top-20 -left-20 w-48 h-48 rounded-full bg-[#F59E0B] opacity-20 blur-3xl"></div>
  <div class="absolute -bottom-28 -right-24 w-64 h-64 rounded-full bg-[#22A55F] opacity-20 blur-3xl"></div>
</section>

<!-- Features Section -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-20 text-[#3F3F3F] bg-[#FFF7ED]">
  <h2 id="features-title" class="text-3xl md:text-4xl font-extrabold mb-12 text-center select-none" data-aos="fade-up">Why Choose Farmi?</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
    @php
      $features = [
        ['icon' => 'fa-seedling', 'title' => 'Locally Sourced Ingredients', 'desc' => 'We use fresh, organic produce and spices sourced directly from Ethiopian farms to ensure every bite bursts with authentic flavor.'],
        ['icon' => 'fa-bolt', 'title' => 'Fast & Friendly Service', 'desc' => 'Our team ensures your food arrives hot and fresh, with a smile — because fast food shouldn’t mean rushed or tasteless.'],
        ['icon' => 'fa-utensils', 'title' => 'Authentic Ethiopian Recipes', 'desc' => 'From spicy tibs to injera wraps, our menu honors traditional recipes with a modern twist to satisfy every craving.'],
      ];
    @endphp

    @foreach($features as $index => $feature)
    <div data-aos="fade-up" data-aos-delay="{{ ($index+1) * 100 }}" 
         class="bg-white rounded-2xl p-8 shadow-lg glass hover:shadow-2xl hover:-translate-y-1 transition transform">
      <div class="mb-4 text-[#22A55F] text-5xl">
        <i class="fas {{ $feature['icon'] }}"></i>
      </div>
      <h3 id="feature-title-{{ $index }}" class="text-xl font-semibold mb-2 text-[#BB5500]">{{ $feature['title'] }}</h3>
      <p id="feature-desc-{{ $index }}" class="text-gray-700 leading-relaxed">{{ $feature['desc'] }}</p>
    </div>
    @endforeach
  </div>
</section>

<!-- Menu Preview -->
<section class="bg-[#FFF7ED] py-20 px-6 md:px-12">
  <div class="max-w-7xl mx-auto">
    <h2 id="popular-title" class="text-3xl md:text-4xl font-extrabold mb-12 text-center select-none text-[#3F3F3F]" data-aos="fade-up">Popular Dishes</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">
      @php
        $popularDishes = [
          [
            'name' => 'Awaze Tibs', 
            'desc' => 'Tender beef sautéed with onions and spicy awaze sauce.', 
            'img' => asset('images/awaze-tibs.jpg')
          ],
          [
            'name' => 'Shiro Wat', 
            'desc' => 'Chickpea stew simmered with rich spices.', 
            'img' => asset('images/shiro.jpeg')
          ],
          [
            'name' => 'Farmi Burger', 
            'desc' => 'Juicy burger with Ethiopian spices, fresh veggies, and signature sauce.', 
            'img' => asset('images/burger.jpg')
          ],
          [
            'name' => 'Doro Wat', 
            'desc' => 'Spicy chicken stew served with boiled eggs.', 
            'img' => asset('images/doro.jpg')
          ],
        ];
      @endphp

      @foreach($popularDishes as $dish)
        <div data-aos="zoom-in" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transform transition duration-300">
          <img src="{{ $dish['img'] }}" alt="{{ $dish['name'] }}" class="w-full h-48 object-cover" />
          <div class="p-4">
            <h3 id="dish-name-{{ $loop->index }}" class="font-semibold text-lg mb-1 text-[#D42F21]">{{ $dish['name'] }}</h3>
            <p id="dish-desc-{{ $loop->index }}" class="text-gray-600 text-sm">{{ $dish['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-center mt-10">
      <a id="menu-link" href="{{ url('/menu') }}" class="inline-block bg-[#22A55F] hover:bg-[#1C6B40] text-white font-semibold py-3 px-10 rounded-full shadow-lg transition transform hover:scale-105">
        View Full Menu
      </a>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-20 bg-white">
  <h2 id="testimonials-title" class="text-3xl md:text-4xl font-extrabold mb-12 text-center select-none text-[#222]" data-aos="fade-up">What Our Customers Say</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @php
      $testimonials = [
        ['quote' => 'Farmi delivers authentic Ethiopian flavors faster than any other place. The tibs are perfectly spiced and the service is always friendly.', 'name' => '– Hana M., Addis Ababa'],
        ['quote' => 'I love the freshness and speed! It’s the perfect spot when I’m craving fast food with a traditional Ethiopian twist.', 'name' => '– Dawit K., Mekelle'],
        ['quote' => 'The atmosphere, the flavors, everything about Farmi is spot on. It’s become my go-to for quick, tasty meals.', 'name' => '– Saba T., Bahir Dar'],
      ];
    @endphp

    @foreach($testimonials as $i => $t)
      <blockquote data-aos="fade-up" data-aos-delay="{{ ($i+1) * 100 }}" 
                  class="bg-[#D42F21] text-white p-8 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
        <p id="testimonial-quote-{{ $i }}" class="italic leading-relaxed mb-4">“{{ $t['quote'] }}”</p>
        <footer id="testimonial-name-{{ $i }}" class="font-semibold text-[#F59E0B]">{{ $t['name'] }}</footer>
      </blockquote>
    @endforeach
  </div>
</section>
@endsection

@push('scripts')
<script>
  // Translation dictionary for English, Amharic, Afaan Oromo
  const translations = {
    en: {
      'hero-title': 'Farm to Fast Food — Ethiopian Flavor, Fast & Fresh',
      'hero-desc': 'Experience authentic Ethiopian-inspired fast food crafted with fresh, local ingredients. Quick, delicious, and full of soul.',
      'hero-btn': 'Explore Our Menu',
      'features-title': 'Why Choose Farmi?',
      'feature-title-0': 'Locally Sourced Ingredients',
      'feature-desc-0': 'We use fresh, organic produce and spices sourced directly from Ethiopian farms to ensure every bite bursts with authentic flavor.',
      'feature-title-1': 'Fast & Friendly Service',
      'feature-desc-1': 'Our team ensures your food arrives hot and fresh, with a smile — because fast food shouldn’t mean rushed or tasteless.',
      'feature-title-2': 'Authentic Ethiopian Recipes',
      'feature-desc-2': 'From spicy tibs to injera wraps, our menu honors traditional recipes with a modern twist to satisfy every craving.',
      'popular-title': 'Popular Dishes',
      'dish-name-0': 'Awaze Tibs',
      'dish-desc-0': 'Tender beef sautéed with onions and spicy awaze sauce.',
      'dish-name-1': 'Shiro Wat',
      'dish-desc-1': 'Chickpea stew simmered with rich spices.',
      'dish-name-2': 'Farmi Burger',
      'dish-desc-2': 'Juicy burger with Ethiopian spices, fresh veggies, and signature sauce.',
      'dish-name-3': 'Doro Wat',
      'dish-desc-3': 'Spicy chicken stew served with boiled eggs.',
      'menu-link': 'View Full Menu',
      'testimonials-title': 'What Our Customers Say',
      'testimonial-quote-0': 'Farmi delivers authentic Ethiopian flavors faster than any other place. The tibs are perfectly spiced and the service is always friendly.',
      'testimonial-name-0': '– Hana M., Addis Ababa',
      'testimonial-quote-1': 'I love the freshness and speed! It’s the perfect spot when I’m craving fast food with a traditional Ethiopian twist.',
      'testimonial-name-1': '– Dawit K., Mekelle',
      'testimonial-quote-2': 'The atmosphere, the flavors, everything about Farmi is spot on. It’s become my go-to for quick, tasty meals.',
      'testimonial-name-2': '– Saba T., Bahir Dar',
    },
    am: {
      'hero-title': ' ፈጣን ምግብ — የኢትዮጵያ ጣዕም፣ ፈጣና እና አዳዲስ',
      'hero-desc': 'በኢትዮጵያ የተነሳ ፈጣን ምግብ ከአዳዲስና ከአካባቢ እቃዎች ተሰራ። ፈጣና ጣፋጭ እና ሙሉ በሙሉ ነው።',
      'hero-btn': 'Menu አሳይ',
      'features-title': 'ለምን Farmi ይምረጡ?',
      'feature-title-0': 'አካባቢ የተሰበሰበ እቃ',
      'feature-desc-0': 'እኛ ከኢትዮጵያ አካባቢ በቀጥታ የተሰበሰበ አዳዲስና ኦርጋኒክ እቃዎችን እንጠቀማለን።',
      'feature-title-1': 'ፈጣና እና የተወዳጅ አገልግሎት',
      'feature-desc-1': 'ቡድናችን ምግብዎን በትክክል በሙቀት እና በፍቅር እንደሚያቀርቡ ያረጋግጣል።',
      'feature-title-2': 'እውነተኛ የኢትዮጵያ የምግብ ምርቶች',
      'feature-desc-2': 'ከነጣፋጭ ጥብስ እስከ እንጀራ ውስጥ አሁን ያለውን ምርቶች እናከብራለን።',
      'popular-title': 'የተወደዱ ምግቦች',
      'dish-name-0': 'አዋዜ ጥብስ',
      'dish-desc-0': 'ለምቀት በሽንኩርት እና አዋዜ ማስተካከያ ተጠቃሚ በሆነ ሥጋ።',
      'dish-name-1': 'ሺሮ ወጥ',
      'dish-desc-1': 'ከተቀባ በላይ በቅርጸ ቅርጽ የተሰራ የእንቁላል እና ድንበሮች ምሳ።',
      'dish-name-2': 'Farmi በርገር',
      'dish-desc-2': 'ጣፋጭ በርገር ከኢትዮጵያ ቅመም እና አዳዲስ አትክልት ጋር።',
      'dish-name-3': 'ዶሮ ወጥ',
      'dish-desc-3': 'ቅመም የተጨመረ ዶሮ ወጥ ከድንበር እና እንቁላል ጋር።',
      'menu-link': 'ሙሉ ምናሌ እይ',
      'testimonials-title': 'የደንበኞቻችን እንዴት እንደሚሉ',
      'testimonial-quote-0': 'Farmi እውነተኛ የኢትዮጵያ ጣዕሞችን በፈጣነነት ያቀርባል። ጥብሱ በትክክል የተቀመጠ ነው እና አገልግሎቱም በጣም ደስታ ያሰኘዋል።',
      'testimonial-name-0': '– ሃና ኤም፣ አዲስ አበባ',
      'testimonial-quote-1': 'እኔ እንደ ፈጣና ምግብ በተለይ ከኢትዮጵያ ምግብ ጋር የተያያዘ ቦታ ነው።',
      'testimonial-name-1': '– ዳዊት ኬ፣ መቀሌ',
      'testimonial-quote-2': 'አየርና ጣዕም ሁሉም ስለ Farmi እጅግ ተስፋ አሰራር ነው።',
      'testimonial-name-2': '– ሳባ ቲ፣ ባህር ዳር',
    },
    or: {
      'hero-title': 'Qonna Irraa Gara Midhaan Ariifataa — Dhaamsa Itoophiyaa, Ariifachiisaa fi Haaraa',
      'hero-desc': 'Midhaan dhiibbaa Itoophiyaa irraa ka’ee haaraa fi naannoo irraa argameen qophaa’e. Ariifachiisaa, mi’aawaa fi qalbii guutuu.',
      'hero-btn': 'Menu Nu Ilaali',
      'features-title': 'Maaliif Farmi Filachuu Dandeessa?',
      'feature-title-0': 'Midhaan Naannoo Irraa Argame',
      'feature-desc-0': 'Midhaan haaraa, organikii fi makiinaa Itoophiyaa irraa sirnaan arganne fayyadamna.',
      'feature-title-1': 'Tajaajila Ariifataa fi Fayyadamoo',
      'feature-desc-1': 'Hojjettoonni keenya nyaata keetii hoo’ina fi mi’aawaa ta’een siif dhiheessu, akkasumas gammachuu qabaachuun si tajaajilu.',
      'feature-title-2': 'Waa’ee Qopheessuu Itoophiyaa Dhugaa',
      'feature-desc-2': 'Irra deddeebi’anii tajaajilamanii fi bu’aa qopheessaa Itoophiyaarraa dhufe, akkasumas mi’aawaa ta’e siif dhiheessina.',
      'popular-title': 'Midhaan Beekamoo',
      'dish-name-0': 'Awaze Tibs',
      'dish-desc-0': 'Foon liqimsamee fi midhaanawwan uffatee akkasumas Awaze ittiin makame.',
      'dish-name-1': 'Shiro Wat',
      'dish-desc-1': 'Muka shiroo soorata adda ta’e gabbataa ta’e.',
      'dish-name-2': 'Farmi Burger',
      'dish-desc-2': 'Burger mi’aawaa kan makiinaa Itoophiyaa fi fuduraalee haaraan guutame.',
      'dish-name-3': 'Doro Wat',
      'dish-desc-3': 'Foon loon dinnichaatiin dabalatee aannan harree waliin dhihaatu.',
      'menu-link': 'Menu Guutuu Ilaali',
      'testimonials-title': 'Maaltu Dubbii Maatii Keenyaa?',
      'testimonial-quote-0': 'Farmi dhuguma mi’aawaa Itoophiyaa ariifachiisaa fi qulqulluu dhiheessa. Tibsi qulqullina guutuu qaba, tajaajilli immoo gammachuu qabutti si tajaajila.',
      'testimonial-name-0': '– Hana M., Finfinne',
      'testimonial-quote-1': 'Ani nyaata ariifataa kan mi’aawaa fi akka aadaa Itoophiyaa waliin wal qabatu jaaladha.',
      'testimonial-name-1': '– Dawit K., Mekelle',
      'testimonial-quote-2': 'Naannoo, mi’aawaa, hundi Farmi irratti xiyyeeffannaa guddaa qaba. Gara iddoo kootti nyaata ariifataa fi mi’aawaa barbaachisu dha.',
      'testimonial-name-2': '– Saba T., Bahir Dar',
    }
  };

  function updateTranslations(lang) {
    if (!translations[lang]) return; // If language not found, do nothing

    const langDict = translations[lang];
    Object.keys(langDict).forEach(id => {
      const el = document.getElementById(id);
      if (!el) return;
      if (el.tagName.toLowerCase() === 'a') {
        el.textContent = langDict[id];
      } else {
        el.innerText = langDict[id];
      }
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    let selectedLang = localStorage.getItem('lang') || 'en';
    updateTranslations(selectedLang);
  });

  window.addEventListener('languageChanged', (e) => {
  const lang = e.detail.lang;
  updateTranslations(lang); // your existing function to swap text contents
});

</script>
@endpush
