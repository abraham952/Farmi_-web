<footer
  class="relative text-white py-12 mt-12 bg-cover bg-center min-h-[360px]"
  style="background-image: url('/images/IMG_0837.png'); background-repeat: no-repeat;"
>
  <!-- Dark overlay for contrast -->
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <!-- Content container positioned above overlay -->
  <div class="relative container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
    <!-- Logo and About -->
    <div data-aos="fade-up" data-aos-delay="100">
      <h2 class="text-2xl font-bold mb-4 select-none">Farmi</h2>
      <p class="text-sm leading-relaxed">
        Celebrating the vibrant flavors of Ethiopia, Farmi serves authentic fast food with a local touch. From traditional spices to modern presentation, every bite is a taste of home.
      </p>
    </div>

    <!-- Quick Links -->
    <div data-aos="fade-up" data-aos-delay="200">
      <h3 class="text-lg font-semibold mb-3 select-none">Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="{{ url('/') }}" class="hover:text-yellow-400 transition">Home</a></li>
        <li><a href="{{ url('/menu') }}" class="hover:text-yellow-400 transition">Menu</a></li>
        <li><a href="{{ url('/about') }}" class="hover:text-yellow-400 transition">About Us</a></li>
        <li><a href="{{ url('/contact') }}" class="hover:text-yellow-400 transition">Contact</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div data-aos="fade-up" data-aos-delay="300">
      <h3 class="text-lg font-semibold mb-3 select-none">Contact</h3>
      <ul class="space-y-2 text-sm">
        <li><span class="font-bold">Phone:</span> +251 900 123 456</li>
        <li><span class="font-bold">Email:</span> info@farmi.et</li>
        <li><span class="font-bold">Address:</span> Addis Ababa, Ethiopia</li>
      </ul>
    </div>

    <!-- Social Media -->
    <div data-aos="fade-up" data-aos-delay="400">
      <h3 class="text-lg font-semibold mb-3 select-none">Follow Us</h3>
      <div class="flex space-x-4 text-xl">
        <a href="#" aria-label="Facebook" class="hover:text-yellow-400 transition"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Instagram" class="hover:text-yellow-400 transition"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Twitter" class="hover:text-yellow-400 transition"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="relative border-t border-yellow-800 mt-6 pt-4 text-center text-sm select-none">
    &copy; {{ date('Y') }} Farmi. All rights reserved. Designed with <span class="text-yellow-400">♥</span> in Ethiopia.
  </div>
</footer>
