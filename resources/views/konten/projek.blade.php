@include('tampilan.navbar')

<section id="projek-kami" class="py-12 bg-gray-100">
    <div class="container mx-auto px-6 md:px-20 mt-10">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Proyek Kami</h1>
            <p class="mt-4 text-gray-600 text-lg">
                Kami bangga dengan berbagai proyek yang telah kami kerjakan, dari konstruksi bangunan modern hingga renovasi kreatif. Lihat karya terbaik kami!
            </p>
        </div>

        <!-- Project Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Proyek 1 -->
            <div class="project-card bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://via.placeholder.com/400" alt="Proyek Gedung Perkantoran" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Gedung Perkantoran Modern</h3>
                    <p class="mt-2 text-gray-600">Proyek pembangunan gedung perkantoran dengan desain minimalis di Jakarta.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">Detail Proyek</a>
                </div>
            </div>

            <!-- Proyek 2 -->
            <div class="project-card bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://via.placeholder.com/400" alt="Renovasi Rumah Mewah" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Renovasi Rumah Mewah</h3>
                    <p class="mt-2 text-gray-600">Renovasi interior dan eksterior rumah mewah dengan detail tinggi di Bandung.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">Detail Proyek</a>
                </div>
            </div>

            <!-- Proyek 3 -->
            <div class="project-card bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://via.placeholder.com/400" alt="Pembangunan Restoran Modern" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Pembangunan Restoran Modern</h3>
                    <p class="mt-2 text-gray-600">Restoran dengan konsep modern di Surabaya, menghadirkan pengalaman makan yang unik.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">Detail Proyek</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('tampilan.footer-button')

<script>
    // Menambahkan animasi fade-in saat halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach((card, index) => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                card.style.opacity = 1;
                card.style.transform = 'translateY(0)';
            }, index * 200); // Delay animasi untuk efek bertahap
        });
    });
</script>
