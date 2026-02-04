<nav x-data="{ open: false }" class="bg-white shadow sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 md:px-10">
    <div class="flex justify-between items-center h-16">
      
      <!-- Logo -->
      <a href="{{ url('/') }}" class="flex items-center space-x-2">
        
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-10 font-semibold text-gray-800">
        <a href="{{ url('/') }}" 
           class="hover:text-green-700 transition {{ request()->is('/') ? 'text-green-700 border-b-2 border-green-700 pb-1' : '' }}">
          Home
        </a>
        <a href="{{ url('/menu') }}" 
           class="hover:text-green-700 transition {{ request()->is('menu') ? 'text-green-700 border-b-2 border-green-700 pb-1' : '' }}">
          Menu
        </a>
        <a href="{{ url('/about') }}" 
           class="hover:text-green-700 transition {{ request()->is('about') ? 'text-green-700 border-b-2 border-green-700 pb-1' : '' }}">
          About
        </a>
        <a href="{{ url('/services') }}" 
           class="hover:text-green-700 transition {{ request()->is('services') ? 'text-green-700 border-b-2 border-green-700 pb-1' : '' }}">
          Services
        </a>
      </div>

      <!-- Mobile Hamburger -->
      <div class="md:hidden">
        <button @click="open = !open" aria-label="Toggle menu" 
                :aria-expanded="open.toString()" 
                class="p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-1">
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="open" x-transition:enter="transition ease-out duration-200" 
       x-transition:enter-start="opacity-0 transform -translate-y-2" 
       x-transition:enter-end="opacity-100 transform translate-y-0" 
       x-transition:leave="transition ease-in duration-150" 
       x-transition:leave-start="opacity-100 transform translate-y-0" 
       x-transition:leave-end="opacity-0 transform -translate-y-2"
       x-cloak
       class="md:hidden bg-white border-t border-gray-200 shadow-lg">
    <div class="px-6 py-5 space-y-4 font-semibold text-gray-800">
      <a href="{{ url('/') }}" class="block hover:text-green-700 {{ request()->is('/') ? 'text-green-700 font-bold' : '' }}">Home</a>
      <a href="{{ url('/menu') }}" class="block hover:text-green-700 {{ request()->is('menu') ? 'text-green-700 font-bold' : '' }}">Menu</a>
      <a href="{{ url('/about') }}" class="block hover:text-green-700 {{ request()->is('about') ? 'text-green-700 font-bold' : '' }}">About</a>
      <a href="{{ url('/services') }}" class="block hover:text-green-700 {{ request()->is('services') ? 'text-green-700 font-bold' : '' }}">Services</a>
    </div>
  </div>
</nav>
