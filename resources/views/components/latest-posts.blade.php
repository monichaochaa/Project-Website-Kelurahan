  
    <!-- Berita Terbaru -->
    <section class="bg-white shadow-md rounded-lg p-4 mt-12 w-80 bg-white p-4 border border-gray-300 h-fit">
        <!-- Tabs -->
        <div class="flex border-b">
          <button class="w-1/3 py-2 font-semibold text-blue-600 border-b-2 border-blue-600">🔄 Latest</button>
          <button class="w-1/3 py-2 font-semibold text-gray-600">🔥 Popular</button>
          <button class="w-1/3 py-2 font-semibold text-gray-600">⚡ Trending</button>
        </div>
      
        <!-- Daftar Berita -->
        <div class="mt-4">
          @foreach ($latestPosts as $latestPost)
            <div class="flex items-center gap-4 border-b py-4">
              <div class="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">BERITA</div>
              <a href="{{ url('/posts/' . $latestPost->slug) }}" class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                {{ $latestPost->title }}
              </a>
            </div>
          @endforeach
        </div>
      </section>
      