@php
    use App\Models\Menu;
    $menus = Menu::whereNull('parent_id')->with('children')->get();
@endphp

<nav class="bg-blue-900 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="-m-1.5 p-1.5">
        <img class="h-10 w-auto" src="https://kelurahan-taman.madiunkota.go.id/wp-content/uploads/2017/03/300.png" alt="kelurahan">
      </a>
        
        <!-- Navbar Menu -->
        <ul class="flex space-x-4">

          @foreach($menus as $menu)

          @php
          $currentUrl = request()->path(); // Mendapatkan path saat ini tanpa domain
          $menuUrl = trim($menu->url, '/');
        
          if ($menuUrl == '') {
          $isActive = ($currentUrl == '/') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600';
          } else {
            $isActive = ($currentUrl == $menuUrl) ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600';
          }
          @endphp

              @if($menu->children->count() > 0)
                  <!-- Dropdown Menu -->
                  <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ $menu->url }}" class=" {{ $isActive }}  px-3 py-2 rounded-md focus:outline-none flex items-center justify-between w-full">
                      {{ $menu->name }}
                  </a>
              
                      <ul x-show="open" class="absolute left-0 bg-white shadow-lg rounded-md w-40 z-50">
                          @foreach($menu->children as $submenu)

                          @php
                                  $isSubmenuActive = request()->is(trim($submenu->url, '/')) ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-blue-200';
                          @endphp

                              <li>
                                <a href="{{ $submenu->url }}" class="block px-3 py-2 {{ $isSubmenuActive }}">
                                {{ $submenu->name }}
                                </a>
                              </li>
                          @endforeach
                      </ul>
                  </li>
              @else
                  <!-- Menu Biasa -->
                  <li class="mt-2 ">
                      <a href="{{ $menu->url }}" class="{{ $isActive }} px-3 py-2 rounded-md">{{ $menu->name }}</a>
                  </li>
              @endif
          @endforeach
      </ul>
      
    </div>
</nav>



{{-- <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 bg-blue-900" aria-label="Global" x-data="{ isOpenPemkot: false, isOpenKelurahan: false, isOpen: false, submenuPemkotOpen: false, submenuKelurahanOpen: false }">
  <div class="flex lg:flex-1">
    <a href="#" class="-m-1.5 p-1.5">
      <span class="sr-only">Your Company</span>
      <img class="h-8 w-auto" src="https://kelurahan-taman.madiunkota.go.id/wp-content/uploads/2017/03/300.png" alt="">
    </a>
  </div>

  <div class="flex lg:hidden">
    <button type="button" @click="isOpen = !isOpen" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
      <span class="sr-only">Open main menu</span>
      <svg x-show="!isOpen" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="isOpen" x-cloak class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  
  <div x-show="isOpen" x-transition class="fixed inset-0 z-50 bg-blue-900 p-6 lg:hidden flex flex-col space-y-4 shadow-lg">
    <a href="/" class="{{ request()->is('/') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white' }} 
      rounded-md px-3 py-2 text-sm font-semibold">BERANDA</a>
    <a href="/posts" class="{{ request()->is('posts') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white' }} 
      rounded-md px-3 py-2 text-sm font-semibold">BERITA</a>
    <div>
      <button @click="isOpenPemkot = !isOpenPemkot" 
      class="{{ request()->is('#') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white' }} 
          rounded-md px-3 py-2 text-sm font-semibold">PEMERINTAH KOTA MADIUN</button>
      <div x-show="isOpenPemkot" x-transition class="pl-4 flex flex-col space-y-2">
        <a href="https://kecamatan-kartoharjo.madiunkota.go.id/"  class="text-white hover:text-blue-700">KECAMATAN KARTOHARJO</a>
        <a href="https://kecamatan-taman.madiunkota.go.id/"class="text-white hover:text-blue-700">KECAMATAN TAMAN</a>
        <a href="https://kecamatan-manguharjo.madiunkota.go.id/" class="text-white hover:text-blue-700">KECAMATAN MANGUHARJO</a>
      </div>
    </div>
    <div>
      <button @click="isOpenKelurahan = !isOpenKelurahan" 
      class="{{ request()->is('kelurahan') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white hover:'}} 
        rounded-md px-3 py-2 text-sm font-semibold">KELURAHAN</button>
      <div x-show="isOpenKelurahan" x-transition class="pl-4 flex flex-col space-y-2">
        <a href="#" class="text-white hover:text-blue-700">KELURAHAN TAMAN</a>
        <a href="https://kelurahan-banjarejo.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN BANJAREJO</a>
        <a href="https://kelurahan-demangan.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN DEMANGAN</a>
        <a href="https://kelurahan-kejuron.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN KEJURON</a>
        <a href="https://kelurahan-josenan.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN JOSENAN</a>
        <a href="https://kelurahan-pandean.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN PANDEAN</a>
        <a href="https://kelurahan-manisrejo.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN MANISREJO</a>
        <a href="https://kelurahan-mojorejo.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN MOJOREJO</a>
        <a href="https://kelurahan-kuncen.madiunkota.go.id/" class="text-white hover:text-blue-700">KELURAHAN KUNCEN</a>
      </div>
    </div>
    <button @click="isOpen = false" class="text-white mt-4">Tutup</button>
  </div>

  <div class="hidden lg:flex lg:gap-x-12">
    <a href="/" class="{{ request()->is('/') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white' }} 
      rounded-md px-3 py-2 text-sm font-semibold">BERANDA</a>
    <a href="/posts" class="{{ request()->is('posts') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white' }} 
      rounded-md px-3 py-2 text-sm font-semibold">BERITA</a>
    <div class="relative" x-data="{ submenuPemkotOpen: false }"
    @mouseenter="submenuPemkotOpen = true" 
    @mouseleave="submenuPemkotOpen = false">
    <a href="https://madiunkota.go.id/" 
    class="{{ request()->is('pemerintah') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white' }} 
           rounded-md px-3 py-2 text-sm font-semibold 
           inline-block">
           PEMERINTAH KOTA MADIUN
    </a>
      <div x-show="submenuPemkotOpen" class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md p-2 flex flex-col space-y-2 z-50">
        <a href="https://kecamatan-kartoharjo.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KECAMATAN KARTOHARJO</a>
        <a href="https://kecamatan-taman.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KECAMATAN TAMAN</a>
        <a href="https://kecamatan-manguharjo.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KECAMATAN MANGUHARJO</a>
      </div>
    </div>
    <div class="relative" x-data="{ submenuKelurahanOpen: false }"
    @mouseenter="submenuKelurahanOpen = true" 
     @mouseleave="submenuKelurahanOpen = false">
     <a href="/kelurahan" 
     class="{{ request()->is('kelurahan') ? 'bg-blue-600 text-white' : 'text-white hover:bg-blue-600 hover:text-white' }} 
            rounded-md px-3 py-2 text-sm font-semibold 
            inline-block">
    KELURAHAN
  </a>
      <div x-show="submenuKelurahanOpen" class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md p-2 flex flex-col space-y-2 z-50">
        <a href="#" class="text-gray-900 hover:text-blue-700">KELURAHAN TAMAN</a>
        <a href="https://kelurahan-banjarejo.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN BANJAREJO</a>
        <a href="https://kelurahan-demangan.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN DEMANGAN</a>
        <a href="https://kelurahan-kejuron.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN KEJURON</a>
        <a href="https://kelurahan-josenan.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN JOSENAN</a>
        <a href="https://kelurahan-pandean.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN PANDEAN</a>
        <a href="https://kelurahan-manisrejo.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN MANISREJO</a>
        <a href="https://kelurahan-mojorejo.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN MOJOREJO</a>
        <a href="https://kelurahan-kuncen.madiunkota.go.id/" class="text-gray-900 hover:text-blue-700">KELURAHAN KUNCEN</a>
      </div>
    </div>
  </div>
  
  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <button type="button" class="relative rounded-full p-1 text-white hover:text-blue-600">
      <span class="absolute -inset-1.5"></span>
      <span class="sr-only">View notifications</span>
      <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
      </svg>
    </button>
      </div>
</nav> --}}