@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{ asset('page/isi.css') }}">

<section class="py-12">
    <div class="container mx-auto px-6 md:px-20 mt-10">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800">{{ $project->nama_projek }}</h1>
            <p class="mt-4 text-black text-xl">{{ $project->deskripsi }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($details as $detail)
                <div class="detail-card bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $detail->nama_detail }}</h3>
                        <p class="mt-2 text-gray-600">{{ $detail->deskripsi }}</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                        @if ($detail->foto_1)
                            <img src="{{ asset('storage/' . $detail->foto_1) }}" alt="Foto 1 - {{ $detail->nama_detail }}" class="w-full h-48 object-cover rounded">
                        @endif
                        @if ($detail->foto_2)
                            <img src="{{ asset('storage/' . $detail->foto_2) }}" alt="Foto 2 - {{ $detail->nama_detail }}" class="w-full h-48 object-cover rounded">
                        @endif
                        @if ($detail->foto_3)
                            <img src="{{ asset('storage/' . $detail->foto_3) }}" alt="Foto 3 - {{ $detail->nama_detail }}" class="w-full h-48 object-cover rounded">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection