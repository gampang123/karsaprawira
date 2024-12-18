@include('tampilan.navbar')
<section id="projek-kami" class="py-12 bg-gray-100">
    <div class="container mx-auto px-6 md:px-20 mt-10">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Proyek Kami</h1>
            <p class="mt-4 text-gray-600 text-lg">
                Kami bangga dengan berbagai proyek yang telah kami kerjakan. Lihat karya terbaik kami!
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($projects as $project)
                  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img 
                            src="{{ $project->foto_path ? asset('storage/' . $project->foto_path) : 'https://via.placeholder.com/400' }}" 
                            alt="{{ $project->nama_projek }}" 
                            class="w-full h-48 object-cover"
                        >
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $project->nama_projek }}</h3>
                            <h4 class="mt-2 text-gray-600">{{ $project->deskripsi }}</h4>
                            <a href="{{ route('konten.projek.detail', $project->id) }}" class="mt-4 inline-block text-blue-600 font-medium hover:underline">
                                Detail Proyek
                            </a>
                        </div>
                  </div>
                @empty
                  <p class="text-gray-500">Belum ada projek yang tersedia.</p>
                @endforelse
        </div>
    </div>
</section>
@include('tampilan.footer-button')

