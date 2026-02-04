<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Farmi — Farm to Fast Food')</title>

  <!-- Fonts: Noto Ethiopic + Inter Latin fallback -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Noto+Sans+Ethiopic:wght@400;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script>
    tailwind = {
      theme: {
        extend: {
          colors: {
            'farmi-green': '#2a6f40',
            'farmi-terracotta': '#b85c3b',
            'farmi-sand': '#f6efe6',
            'farmi-dark': '#0f1724',
            'farmi-yellow': '#f2b134',
          }
        }
      }
    }
  </script>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS -->
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <!-- Alpine.js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <meta name="description" content="Farmi - Ethiopian-inspired fast food portfolio website built with Laravel Blade and Tailwind CSS." />

  <style>
    body {
      font-family: 'Noto Sans Ethiopic', 'Inter', sans-serif;
      background-color: #f6efe6;
      color: #0f1724;
    }
    nav.flex-1 {
      background: transparent !important;
      padding: 0 !important;
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
    }
    nav.flex-1 ul {
      display: flex;
      gap: 2rem;
      list-style: none;
      padding: 0;
      margin: 0;
    }
    nav.flex-1 ul li a {
      text-decoration: none;
      color: #0f1724;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    nav.flex-1 ul li a:hover,
    nav.flex-1 ul li a:focus {
      color: #b85c3b; /* farmi-terracotta */
      outline: none;
    }
  </style>

  @stack('head')
</head>
<body class="leading-relaxed">

  <!-- Header with combined Logo, Nav, and Language Selector in one div -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 md:px-8 flex items-center h-36 gap-12">
      
      <!-- Logo -->
      <a href="{{ url('/') }}" 
         class="flex items-center gap-4 select-none flex-shrink-0"
         data-aos="fade-down"
         aria-label="Farmi Home"
         tabindex="0"
      >
        <div class="relative h-28 w-28 rounded-full overflow-hidden shadow-lg ring-2 ring-farmi-green transition-transform duration-300 ease-in-out hover:scale-110 focus:scale-110 focus:outline-none focus:ring-4 focus:ring-farmi-green/60">
          <img 
            src="{{ asset('images/logo.jpg') }}" 
            alt="Farmi Logo" 
            class="object-cover w-full h-full"
            loading="lazy"
            decoding="async"
            role="img"
            onerror="this.onerror=null;this.src='{{ asset('images/default-logo.png') }}';"
          />
        </div>
      </a>

      <!-- Navigation -->
      <nav class="flex-1">
        @include('partials.navbar')
      </nav>

      <!-- Language Selector -->
      <div class="flex-shrink-0">
        <select id="languageSelector" aria-label="Select Language" 
          class="p-3 rounded-md bg-gray-100 border border-gray-300 text-gray-700 font-medium
                 focus:outline-none focus:ring-2 focus:ring-farmi-green focus:border-transparent
                 transition duration-200 w-44">
          <option value="en">English</option>
          <option value="am">አማርኛ</option>
          <option value="or">Afaan Oromo</option>
        </select>
      </div>

    </div>
  </header>

  <main class="min-h-[75vh]">
    @if(session('success'))
      <div class="max-w-4xl mx-auto px-4">
        <div class="bg-green-50 border border-green-200 text-green-800 rounded-lg p-3 shadow" role="alert">
          {{ session('success') }}
        </div>
      </div>
    @endif

    @yield('content')
  </main>

  @include('partials.footer')

  <script>
    // Initialize AOS after Alpine is ready
    document.addEventListener('alpine:init', () => {
      AOS.init({
        duration: 700,
        once: true,
        easing: 'ease-in-out',
      });
    });
    window.addEventListener('load', () => AOS.refresh());

    // Language selector: save and apply language without reload
    const languageSelector = document.getElementById('languageSelector');

    function setLanguage(lang) {
      if (!lang) return;
      localStorage.setItem('selectedLanguage', lang);
      // Dispatch a custom event to notify other scripts to update text
      window.dispatchEvent(new CustomEvent('languageChanged', { detail: { lang } }));
    }

    // On select change, save new language and notify listeners
    languageSelector.addEventListener('change', (e) => {
      setLanguage(e.target.value);
    });

    // On page load, set selector to saved language and notify listeners
    document.addEventListener('DOMContentLoaded', () => {
      const savedLang = localStorage.getItem('selectedLanguage') || 'en';
      languageSelector.value = savedLang;
      setLanguage(savedLang);
    });

    
  </script>

  @stack('scripts')
</body>
</html>
