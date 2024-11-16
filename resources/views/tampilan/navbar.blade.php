<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<nav class="fixed top-0 left-0 w-full bg-white z-50 shadow-md">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
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
          <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Menu Tautan -->
            <a href="#beranda" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Beranda</a>
            <a href="#layanan-kami" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Layanan</a>
            <a href="#tentang-kami" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Tentang Kami</a>
            <a href="#projek" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Projek</a>
            <a href="#kontak" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Kontak</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Search bar -->
        <div>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>
        <!-- Login button -->
        <div>
        @if (Route::has('login'))
           <nav class="-mx-3 flex flex-1 justify-end">
             @auth
             @else
              <a class="no-underline btn btn-primary ml-2 text-white" href="{{ route('login') }}">
                Log in
              </a>
             @endauth
            </nav>
          @endif
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Dashboard</a>
      <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Team</a>
      <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Projects</a>
      <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-100 hover:text-white no-underline">Calendar</a>
    </div>
  </div>
</nav>