@extends('admin.layout')

@section('content')
<div class="flex min-h-screen bg-gray-100">

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="container mx-auto bg-gradient-to-r from-blue-100 to-blue-300 p-8 rounded-xl shadow-xl">
            <h1 class="text-4xl font-extrabold mb-8 text-blue-800">Menu</h1>
            
            <form action="{{ url('/admin/menu/add') }}" method="POST" class="bg-white p-8 rounded-xl shadow-lg border border-blue-300">
                @csrf
                <div class="mb-6">
                    <input type="text" name="name" placeholder="Nama Menu" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm">
                </div>
                
                <div class="mb-6">
                    <label for="parent_id" class="block text-gray-800 font-semibold mb-2">Submenu dari:</label>
                    <select id="parent_id" name="parent_id" class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 bg-gray-100 shadow-sm">
                        <option value="">-- Tidak Ada (Menu Utama) --</option>
                        @if(isset($menus))
                        <ul>
                            @foreach ($menus as $menu)
                                <li><a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a></li>
                            @endforeach
                        </ul>
                    @else
                        <p>Tidak ada menu tersedia.</p>
                    @endif
                    </select>
                </div>

                <div class="mb-6">
                    <label for="route_option" class="block text-gray-800 font-semibold mb-2">Pilih URL dari Route:</label>
                    <select id="route_option" name="route_option" onchange="updateUrl()" 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 bg-gray-100 shadow-sm">
                        <option value="">-- Pilih Route --</option>
                        @foreach ($routes as $route)
                            <option value="{{ url($route) }}">{{ $route }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <input type="text" id="custom_url" name="url" placeholder="Atau masukkan URL manual" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm">
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-800 text-white py-4 rounded-xl font-semibold hover:shadow-xl transition-all duration-300">Tambah Menu</button>
            </form>

            <h2 class="text-3xl font-semibold mt-8 text-blue-800">Daftar Menu</h2>
            <ul class="mt-6 bg-white p-6 rounded-xl shadow-lg border border-blue-300 divide-y divide-gray-200">
                @foreach ($menus as $menu)
                    <li class="p-4 flex justify-between items-center hover:bg-gray-100 transition-all rounded-xl">
                        <div>
                            <a href="{{ $menu->url }}" class="text-blue-600 font-bold hover:underline">{{ $menu->name }}</a>
                        </div>
                        <div class="flex gap-3">
                            <form action="{{ url('/admin/menu/delete/' . $menu->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-xl hover:bg-red-700 transition-all duration-300">Hapus</button>
                            </form>
                            @if ($menu->children->count())
                                <button onclick="toggleDropdown({{ $menu->id }})" class="bg-gray-300 px-4 py-2 rounded-xl hover:bg-gray-400">▼</button>
                            @endif
                        </div>
                    </li>
                    @if ($menu->children->count())
                        <ul id="submenu-{{ $menu->id }}" class="ml-8 hidden bg-gray-50 p-4 rounded-xl">
                            @foreach ($menu->children as $child)
                                <li class="p-4 flex justify-between items-center hover:bg-gray-200 transition-all rounded-xl">
                                    <a href="{{ $child->url }}" class="text-blue-600 font-bold hover:underline">{{ $child->name }}</a>
                                    <form action="{{ url('/admin/menu/delete/' . $child->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-xl hover:bg-red-700 transition-all duration-300">Hapus</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </ul>
        </div>
    </main>
</div>

<script>
    function updateUrl() {
        let routeDropdown = document.getElementById("route_option");
        let customUrlInput = document.getElementById("custom_url");
        if (routeDropdown.value) {
            customUrlInput.value = routeDropdown.value; 
        } else {
            customUrlInput.value = ""; 
        }
    }

    function toggleDropdown(menuId) {
        let submenu = document.getElementById("submenu-" + menuId);
        submenu.classList.toggle("hidden");
    }
</script>
@endsection