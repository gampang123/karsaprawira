@extends('welcome')

@section('content')

<link rel="stylesheet" href="{{ asset('page/isi.css') }}">

<section id="tentang-kami" class="py-12 ">
    <div class="container mx-auto px-6 md:px-20 mt-10">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Tentang Kami</h1>
            <p class="mt-4 text-white text-lg">
                Selamat datang di halaman tentang kami! Kami adalah perusahaan yang bergerak di bidang konstruksi dan renovasi bangunan dengan dedikasi tinggi terhadap kualitas dan inovasi.
            </p>
        </div>

        <!-- Profil Perusahaan -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Profil Perusahaan</h2>
            <p class="text-gray-600 leading-relaxed">
                CV Karsa Prawira didirikan pada tahun 2010 dengan tujuan memberikan layanan terbaik di bidang konstruksi dan desain bangunan. Kami memiliki tim yang terdiri dari tenaga profesional yang siap membantu mewujudkan visi dan impian klien.
            </p>
        </div>

        <!-- Visi dan Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Visi</h2>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi perusahaan konstruksi terpercaya yang mengedepankan inovasi, efisiensi, dan keberlanjutan dalam setiap proyek.
                </p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Misi</h2>
                <ul class="list-disc list-inside text-gray-600 leading-relaxed">
                    <li>Menyediakan layanan berkualitas tinggi dengan fokus pada kepuasan pelanggan.</li>
                    <li>Meningkatkan kompetensi tim melalui pelatihan dan pengembangan berkelanjutan.</li>
                    <li>Menggunakan teknologi terkini untuk memastikan hasil yang optimal.</li>
                    <li>Mendorong praktik konstruksi yang ramah lingkungan.</li>
                </ul>
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Struktur Organisasi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <!-- Anggota 1 -->
                <div class="p-4">
                    <img src="https://via.placeholder.com/150" alt="CEO" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-lg font-semibold">John Doe</h3>
                    <p class="text-gray-600">CEO</p>
                </div>
                <!-- Anggota 2 -->
                <div class="p-4">
                    <img src="https://via.placeholder.com/150" alt="Manager" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-lg font-semibold">Jane Smith</h3>
                    <p class="text-gray-600">Project Manager</p>
                </div>
                <!-- Anggota 3 -->
                <div class="p-4">
                    <img src="https://via.placeholder.com/150" alt="Designer" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-lg font-semibold">Michael Brown</h3>
                    <p class="text-gray-600">Lead Designer</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
