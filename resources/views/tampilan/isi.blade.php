@extends('welcome')


@section('content')

<section id="beranda" class="relative h-screen">
    <div class="relative h-full">
      <!-- Background Image -->
      <img src="https://via.placeholder.com/1500x800" alt="Gedung Modern" class="w-full h-full object-cover">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-transparent to-gray-900 opacity-50"></div>
      <!-- Content -->
      <div class="absolute inset-0 flex items-center justify-start px-8 md:px-20">
        <div class="text-white max-w-xl">
          <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Solusi Konstruksi dan Nonkonstruksi Terbaik
          </h1>
          <p class="mt-4 text-gray-200 text-lg">
            Kami memberikan layanan terbaik untuk pembangunan infrastruktur, perencanaan, dan pengawasan proyek Anda.
          </p>
          <a href="#services" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-medium rounded-lg hover:bg-blue-500 transition">
            Lihat Layanan Kami
          </a>
        </div>
      </div>
    </div>
</section>


<div id="layanan-kami" class="bg-gray-100">
  <!-- Layanan Kami Section -->
  <section class="py-12">
    <h2 class="text-center text-3xl font-bold mb-8">Layanan Kami</h2>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
      <!-- Layanan 1 -->
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-pencil-ruler text-4xl text-black-600 mb-4"></i>
        <h3 class="text-xl font-semibold">Planning</h3>
        <p class="mt-2 text-gray-600">Perencanaan sipil dan bangunan.</p>
      </div>
      <!-- Layanan 2 -->
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-hammer text-4xl text-black-600 mb-4"></i>
        <h3 class="text-xl font-semibold">Konstruksi</h3>
        <p class="mt-2 text-gray-600">Pelaksanaan konstruksi proyek.</p>
      </div>
      <!-- Layanan 3 -->
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-paint-roller text-4xl text-black-600 mb-4"></i>
        <h3 class="text-xl font-semibold">Eksterior</h3>
        <p class="mt-2 text-gray-600">Desain dan pengembangan eksterior.</p>
      </div>
      <!-- Layanan 4 -->
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-tools text-4xl text-black-600 mb-4"></i>
        <h3 class="text-xl font-semibold">Interior</h3>
        <p class="mt-2 text-gray-600">Perbaikan dan pengembangan interior.</p>
      </div>
    </div>
  </section>

  <!-- Tentang Kami Section -->
  <section id="tentang-kami" class="py-12 bg-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div>
        <img src="https://via.placeholder.com/500" alt="Blueprint" class="rounded-lg shadow">
      </div>
      <div>
        <h2 class="text-3xl font-bold">Tentang Kami</h2>
        <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet purus sit amet metus venenatis, lectus magna fringilla urna.</p>
        <a href="#" class="mt-4 inline-block text-green-600 font-bold">Lebih Lanjut</a>
      </div>
    </div>
  </section>

  <!-- Project Kami Section -->
  <section id="projek" class="py-12">
    <div class="container mx-auto">
      <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold">Project Kami</h2>
        <a href="#" class="text-green-600">Semua</a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Project 1 -->
        <div class="bg-white shadow rounded-lg">
          <img src="https://via.placeholder.com/400" alt="Project 1" class="rounded-t-lg">
          <div class="p-6">
            <h3 class="text-xl font-semibold">Proyek Konstruksi Taman</h3>
            <p class="mt-2 text-gray-600">Pembangunan taman kota di Jakarta.</p>
          </div>
        </div>
        <!-- Project 2 -->
        <div class="bg-white shadow rounded-lg">
          <img src="https://via.placeholder.com/400" alt="Project 2" class="rounded-t-lg">
          <div class="p-6">
            <h3 class="text-xl font-semibold">Proyek Rumah Mewah</h3>
            <p class="mt-2 text-gray-600">Pembangunan rumah mewah di Bandung.</p>
          </div>
        </div>
        <!-- Project 3 -->
        <div class="bg-white shadow rounded-lg">
          <img src="https://via.placeholder.com/400" alt="Project 3" class="rounded-t-lg">
          <div class="p-6">
            <h3 class="text-xl font-semibold">Proyek Restoran Modern</h3>
            <p class="mt-2 text-gray-600">Renovasi restoran di Surabaya.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portofolio Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8">Portofolio</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Portofolio 1 -->
        <div class="text-center">
          <img src="https://via.placeholder.com/150" alt="Profile 1" class="rounded-full mx-auto mb-4">
          <h3 class="text-xl font-semibold">James Pasangguinddi Arwand</h3>
          <p class="mt-2 text-gray-600">Designer Interior.</p>
        </div>
        <!-- Portofolio 2 -->
        <div class="text-center">
          <img src="https://via.placeholder.com/150" alt="Profile 2" class="rounded-full mx-auto mb-4">
          <h3 class="text-xl font-semibold">Alean Schliefer</h3>
          <p class="mt-2 text-gray-600">Arsitek Eksterior.</p>
        </div>
        <!-- Portofolio 3 -->
        <div class="text-center">
          <img src="https://via.placeholder.com/150" alt="Profile 3" class="rounded-full mx-auto mb-4">
          <h3 class="text-xl font-semibold">Michael Darford</h3>
          <p class="mt-2 text-gray-600">Project Manager.</p>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
