@extends('admin.layout')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <main class="flex-1 p-8">
        <div class="container mx-auto bg-gradient-to-r from-blue-100 to-blue-300 p-8 rounded-xl shadow-xl">
            <h1 class="text-4xl font-extrabold mb-8 text-blue-800">Kelola Berita</h1>
            
            <form action="{{ url('/admin/posts/add') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-xl shadow-lg border border-blue-300">
                @csrf
                <div class="mb-6">
                    <input type="text" name="title" placeholder="Judul Berita" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm">
                </div>
                
                <div class="mb-6">
                    <textarea name="content" placeholder="Isi Berita" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm"></textarea>
                </div>
                
                <div class="mb-6">
                    <label for="category" class="block text-gray-800 font-semibold mb-2">Kategori:</label>
                    <select name="category" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 bg-gray-100 shadow-sm">
                        <option value="UI/UX">UI/UX</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Front-End">Front-End</option>
                        <option value="Web Design">Web Design</option>
                        <option value="Data Science">Data Science</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <label for="image" class="block text-gray-800 font-semibold mb-2">Unggah Gambar:</label>
                    <input type="file" name="image" accept="image/*" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm bg-gray-100">
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-800 text-white py-4 rounded-xl font-semibold hover:shadow-xl transition-all duration-300">Tambah Berita</button>
            </form>

            <h2 class="text-3xl font-semibold mt-8 text-blue-800">Daftar Berita</h2>
            <ul class="mt-6 bg-white p-6 rounded-xl shadow-lg border border-blue-300 divide-y divide-gray-200">
                @foreach ($posts as $post)
                    <li class="p-4 flex justify-between items-center hover:bg-gray-100 transition-all rounded-xl">
                        <div>
                            <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                            <p class="text-sm text-gray-600">Kategori: {{ $post->category }}</p>
                        </div>
                        <div class="flex gap-3">
                            <a href="{{ url('/admin/posts/edit/' . $post->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-xl hover:bg-yellow-700 transition-all duration-300">Edit</a>
                            <form action="{{ url('/admin/posts/delete/' . $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-xl hover:bg-red-700 transition-all duration-300">Hapus</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</div>
@endsection
