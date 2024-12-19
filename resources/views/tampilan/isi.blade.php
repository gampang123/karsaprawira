<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('page/isi.css') }}">
    <title>Landing Page</title>
</head>
<body>
    <!-- Section Hero -->
    <section id="beranda" class="relative h-screen flex flex-col">
        <div class="container mt-7">
            <div class="row">
                <div class="col">
                    <h3 class="consulting text-blue-600 justify-start mt-28 text-7xl lg:text-7xl md:text-7xl sm:text-6xl">CONSULTING</h3>
                    <h3 class="text-white justify-start text-7xl lg:text-7xl md:text-7xl sm:text-6xl">SERVICE</h3>
                    <div class="row">
                        <div class="col-2">
                            <img class="w-14 sm:w-12 md:w-14" src="{{ asset('landingpage/5.png') }}" alt="">
                        </div>
                        <div class="col-9 text-white font-semibold text-lg sm:text-base md:text-sm">THE BEST CONSTRUCTION AND <br>NON-CONSTRUCTION SOLUTION</div>
                    </div>
                    <div class="tombol rounded-3xl w-48 h-11 mt-4 bg-black flex items-center">
                      <a class="no-underline text-white" href="{{ route ('tentangkami') }}">
                        <button class="text-white flex items-center space-x-2">
                            <span class="justify-start pl-4 pr-10 font-medium sm:pr-12 sm:text-sm md:text-base">See More</span>
                            <div class="bg-black w-9 h-9 rounded-full flex items-center justify-center">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </button>
                      </a>
                    </div>
                </div>
                <div class="col hidden inset-y-0 sm:block right-0 items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <img class="mx-auto" src="{{ asset('landingpage/1.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="w-full absolute bottom-0 left-0">
            <img src="{{ asset('landingpage/2.png') }}" alt="Bottom Graphic" class="w-full h-auto object-cover">
        </div>
    </section>

    <!-- Layanan Kami Section -->
    <section id="layanan-kami" class="py-12">
        <h2 class="text-center text-3xl font-bold mb-8 mt-5">Layanan Kami</h2>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="p-6 bg-white shadow rounded-lg" data-service="planning">
                <i class="fas fa-pencil-ruler text-4xl text-black-600 mb-4"></i>
                <h3 class="text-xl font-semibold">Planning</h3>
                <p class="mt-2 text-gray-600">Perencanaan sipil dan bangunan.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-lg" data-service="konstruksi">
                <i class="fas fa-hammer text-4xl text-black-600 mb-4"></i>
                <h3 class="text-xl font-semibold">Konstruksi</h3>
                <p class="mt-2 text-gray-600">Pelaksanaan konstruksi proyek.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-lg" data-service="eksterior">
                <i class="fas fa-paint-roller text-4xl text-black-600 mb-4"></i>
                <h3 class="text-xl font-semibold">Eksterior</h3>
                <p class="mt-2 text-gray-600">Desain dan pengembangan eksterior.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-lg" data-service="interior">
                <i class="fas fa-tools text-4xl text-black-600 mb-4"></i>
                <h3 class="text-xl font-semibold">Interior</h3>
                <p class="mt-2 text-gray-600">Perbaikan dan pengembangan interior.</p>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang-kami" class="py-1">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-5">
            <div>
                <img src="https://via.placeholder.com/500" alt="Blueprint" class="rounded-lg shadow">
            </div>
            <div>
                <h2 class="text-3xl font-bold">Tentang Kami</h2>
                <p class="mt-4 text-white">
                    <b>CV. Karsa Prawira</b> adalah Perusahaan berbadan hukum yang bergerak dalam bidang pelayanan Jasa Konsultansi 
                    dengan lingkup pekerjaan Konstruksi dan Non – Konstruksi dari suatu kegiatan pembangunan yang diselenggarakan Pemerintah maupun Swasta. 
                    Dalam menangani setiap pekerjaan, CV. Karsa Prawira selalu mengutamakan pelayanan jasa yang optimal dan memberikan yang terbaik kepada Pemberi Tugas. 
                    Untuk mewujudkan pelayanan yang demikian, CV. Karsa Prawira menerapkan sistem manajemen proyek secara khusus untuk setiap pekerjaan/proyek yang ditangani 
                    dan mengerahkan tenaga ahli yang berpengalaman dan bekerja secara profesional.
                </p>
                <a href="{{ route('tentangkami') }}" class="mt-4 inline-block text-black font-bold no-underline">Lebih Lanjut <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Projek Kami Section -->
    <section id="projek" class="py-12">
        <div class="container mx-auto mt-5 px-4">
            <h2 class="text-3xl font-bold text-gray-800">Projek Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-4">
                @forelse ($projects as $project)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img 
                            src="{{ $project->foto_path ? asset('storage/' . $project->foto_path) : 'https://via.placeholder.com/400' }}" 
                            alt="{{ $project->nama_projek }}" 
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $project->nama_projek }}</h3>
                            <p class="mt-2 text-gray-600">{{ $project->deskripsi }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada projek yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Portofolio Section -->
    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Portofolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Profile 1" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">James Pasangguinddi Arwand</h3>
                    <p class="mt-2 text-gray-600">Designer Interior.</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Profile 2" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Alean Schliefer</h3>
                    <p class="mt-2 text-gray-600">Arsitek Eksterior.</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Profile 3" class="rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Michael Darford</h3>
                    <p class="mt-2 text-gray-600">Project Manager.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('isi.js') }}"></script>
</body>
</html>
