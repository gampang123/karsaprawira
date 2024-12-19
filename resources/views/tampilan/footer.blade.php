<footer class="bg-gray-800 text-gray-300 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Section 1: Company Info -->
            <div>
                <h3 class="text-white text-xl font-semibold"><img class="w-10" src="{{ asset ('landingpage/3.png') }}" alt="">CV. Karsa Prawira</h3>
                <p class="mt-2 text-gray-400">Jl. Ambar Arum, Mejing Lor, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55264</p>
            </div>
            <!-- Section 2: Articles -->
            <div>
                <h3 class="text-white text-xl font-semibold">Menu</h3>
                <ul class="mt-2 space-y-2 text-gray-400">
                    <li><a href="#utama" class="hover:text-white text-white no-underline">Beranda</a></li>
                    <li><a href="#layanan-kami" class="hover:text-white text-white no-underline">Layanan Kami</a></li>
                    <li><a href="#tentang-kami" class="hover:text-white text-white no-underline">Tentang Kami</a></li>
                    <li><a href="#projek" class="hover:text-white text-white no-underline">Projek</a></li>
                    <li><a href="#kontak" class="hover:text-white text-white no-underline">Kontak</a></li>
                </ul>
            </div>
            <!-- Section 3: Links -->
            <div>
                <h3 class="text-white text-xl font-semibold">Projek</h3>
                <ul class="mt-2 space-y-2 text-gray-400">
                    <li><a href="{{ route ('konten.projek') }}" class="hover:text-white text-white no-underline">Projek 1</a></li>
                    <li><a href="{{ route ('konten.projek') }}" class="hover:text-white text-white no-underline">Projek 2</a></li>
                    <li><a href="{{ route ('konten.projek') }}" class="hover:text-white text-white no-underline">Projek 3</a></li>
                </ul>
            </div>
            <!-- Lokasi -->
            <div>
                <h3 class="text-white text-xl font-semibold">Location</h3>
                <div class="mt-4">
                    <iframe 
                        class="w-full h-64 md:w-3/4 md:h-72 lg:w-auto lg:h-80" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15812.620287637734!2d110.30058969788908!3d-7.773375925936061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af7be0ae920df%3A0x8654620ade86b4b5!2sKarsa%20Prawira%2C%20CV.!5e0!3m2!1sid!2sid!4v1731729984183!5m2!1sid!2sid" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
