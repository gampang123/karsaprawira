@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{ asset('page/isi.css') }}">

<section id="tentang-kami" class="py-1 h-screen">
    <div class="container mx-auto px-6 md:px-20 mt-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Kontak Kami</h1>
            <p class="mt-4 text-white font-semibold text-lg">
                Selamat datang di halaman tentang kami! Kami adalah perusahaan yang bergerak di bidang konstruksi dan renovasi bangunan dengan dedikasi tinggi terhadap kualitas dan inovasi.
            </p>
        </div>

        <!-- Kontak -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Kontak Kami</h2>
            <p class="text-gray-600 leading-relaxed">
                Jika Anda memiliki pertanyaan atau ingin bekerja sama dengan kami, jangan ragu untuk menghubungi:
            </p>
            <ul class="mt-4 text-gray-600 leading-relaxed">
                <li><strong>Telepon:</strong> +62 123 4567 890</li>
                <li><strong>Email:</strong> info@karsaprawira.com</li>
                <li><strong>Alamat:</strong> Jl. Merdeka No. 123, Jakarta, Indonesia</li>
            </ul>
        </div>
    </div>
</section>

@endsection