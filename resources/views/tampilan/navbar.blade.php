<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('page/navbar.css') }}">


<nav class="fixed top-0 left-0 w-screen bg-white z-50 shadow-md">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span id="menu-toggle" class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <li class="list-none"><a href="{{ route('beranda') }}"><img   class="h-10 w-auto" src="{{ asset('landingpage/3.png') }}" alt="Your Company"></a></li>
          <li class="list-none"><a class="hidden  inset-y-0 sm:block right-0 items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 list-none no-underline text-white" href="{{ route ('beranda') }}"><h5>CV. Karsa Prawira</h5></a></li>
        </div>
      </div>
      <div class="hidden inset-y-0 sm:block right-0 items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Login button -->
        <div>
          <div class="flex space-x-4 justify-end">
            <!-- Menu Tautan -->
            <a href="{{ route('beranda') }}#layanan-kami" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-400 hover:text-black no-underline">Layanan</a>
            <a href="{{ route ('tentangkami') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-400 hover:text-black no-underline">Tentang Kami</a>
            <a href="{{ route ('konten.projek') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-400 hover:text-black no-underline">Projek</a>
            <a href="{{ route ('kontak') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-400 hover:text-black no-underline">Kontak</a>
              @if (Route::has('login'))
              @auth
              @else
                <a class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-blue-400 no-underline hover:text-white" href="{{ route('login') }}">Log in</a>
              @endauth
            @endif
          </div> 
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="sm:hidden" id="mobile-menu">
    <ul class="space-y-1 px-2 pb-3 pt-2 list-none">
      <li>
        <a href="#beranda" class="block rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">
          Beranda
        </a>
      </li>
      <li>
        <a href="#layanan-kami" class="block rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">
          Layanan Kami
        </a>
      </li>
      <li>
        <a href="#tentang-kami" class="block rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">
          Tentang Kami
        </a>
      </li>
      <li>
        <a href="#projek" class="block rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">
          Projek
        </a>
      </li>
      <li>
        <a href="#" class="block rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">
          Kontak
        </a>
      </li>
    </ul>
  </div>

</div>

</nav>

<script>
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
  });
</script>

