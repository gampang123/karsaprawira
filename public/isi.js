// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Hover Animation for Services and Projects
document.querySelectorAll('.p-6').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.classList.add('shadow-lg', 'transform', 'scale-105', 'transition');
    });
    card.addEventListener('mouseleave', () => {
        card.classList.remove('shadow-lg', 'transform', 'scale-105', 'transition');
    });
});

// Back-to-Top Button
const backToTopButton = document.createElement('div');
backToTopButton.id = 'back-to-top';
backToTopButton.innerHTML = '&#8679;';
backToTopButton.style.position = 'fixed';
backToTopButton.style.bottom = '20px';
backToTopButton.style.right = '20px';
backToTopButton.style.width = '50px';
backToTopButton.style.height = '50px';
backToTopButton.style.backgroundColor = '#1E40AF';
backToTopButton.style.color = 'white';
backToTopButton.style.borderRadius = '50%';
backToTopButton.style.display = 'flex';
backToTopButton.style.justifyContent = 'center';
backToTopButton.style.alignItems = 'center';
backToTopButton.style.cursor = 'pointer';
backToTopButton.style.display = 'none'; // Hidden initially
document.body.appendChild(backToTopButton);

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTopButton.style.display = 'flex';
    } else {
        backToTopButton.style.display = 'none';
    }
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Modal View for Projects
document.querySelectorAll('.bg-white.shadow.rounded-lg').forEach((projectCard) => {
    projectCard.addEventListener('click', () => {
        // Ambil nama layanan dari data-service
        const service = projectCard.getAttribute('data-service');

        // Deskripsi dan ikon untuk setiap layanan
        const details = {
            planning: {
                description: 'Planning adalah perencanaan sipil dan bangunan untuk memastikan proyek berjalan lancar.',
                icon: '<i class="fas fa-pencil-ruler text-6xl text-black-600 mb-4"></i>'
            },
            konstruksi: {
                description: 'Konstruksi adalah pelaksanaan pembangunan proyek dari awal hingga selesai.',
                icon: '<i class="fas fa-hammer text-6xl text-black-600 mb-4"></i>'
            },
            eksterior: {
                description: 'Eksterior melibatkan desain dan pengembangan area luar bangunan.',
                icon: '<i class="fas fa-paint-roller text-6xl text-black-600 mb-4"></i>'
            },
            interior: {
                description: 'Interior mencakup perbaikan dan pengembangan bagian dalam bangunan.',
                icon: '<i class="fas fa-tools text-6xl text-black-600 mb-4"></i>'
            }
        };

        // Buat modal
        const modal = document.createElement('div');
        modal.classList.add('fixed', 'inset-0', 'bg-gray-800', 'bg-opacity-75', 'flex', 'justify-center', 'items-center');
        modal.innerHTML = `
            <div class="bg-white p-6 rounded-lg max-w-lg text-center">
                ${details[service].icon}
                <h3 class="text-xl font-semibold mb-4">${service.charAt(0).toUpperCase() + service.slice(1)}</h3>
                <p>${details[service].description}</p>
                <button id="close-modal" class="mt-4 px-6 py-2 bg-red-600 text-white rounded hover:bg-red-500">Tutup</button>
            </div>
        `;
        document.body.appendChild(modal);

        // Tutup modal
        modal.querySelector('#close-modal').addEventListener('click', () => {
            modal.remove();
        });
    });
});
