@extends('admin.layout')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <main class="flex-1 p-8">
        <div class="container mx-auto bg-gradient-to-r from-blue-100 to-blue-300 p-8 rounded-xl shadow-xl">
            <h1 class="text-4xl font-extrabold mb-8 text-blue-800">Edit Berita</h1>
            
            <form action="{{ url('/admin/posts/update/' . $post->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-xl shadow-lg border border-blue-300">
                @csrf
                @method('PUT')
                
                <div class="mb-6">
                    <input type="text" name="title" value="{{ $post->title }}" placeholder="Judul Berita" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm">
                </div>
                <div class="mb-6">
                    <textarea name="content" placeholder="Isi Berita" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm">{{ $post->content }}</textarea>
                </div>
                
                <div class="mb-6">
                    <label for="category" class="block text-gray-800 font-semibold mb-2">Kategori:</label>
                    <select name="category" required 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 bg-gray-100 shadow-sm">
                        <option value="UI/UX" {{ $post->category == 'UI/UX' ? 'selected' : '' }}>UI/UX</option>
                        <option value="Machine Learning" {{ $post->category == 'Machine Learning' ? 'selected' : '' }}>Machine Learning</option>
                        <option value="Front-End" {{ $post->category == 'Front-End' ? 'selected' : '' }}>Front-End</option>
                        <option value="Web Design" {{ $post->category == 'Web Design' ? 'selected' : '' }}>Web Design</option>
                        <option value="Data Science" {{ $post->category == 'Data Science' ? 'selected' : '' }}>Data Science</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <label for="image" class="block text-gray-800 font-semibold mb-2">Unggah Gambar Baru:</label>
                    <input type="file" name="image" accept="image/*" 
                        class="w-full p-4 border rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-600 shadow-sm bg-gray-100">
                    
                    @if($post->image)
                        <p class="mt-2 text-gray-600">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Berita" class="w-32 h-32 mt-2 rounded-xl shadow">
                    @endif
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-800 text-white py-4 rounded-xl font-semibold hover:shadow-xl transition-all duration-300">Simpan Perubahan</button>
            </form>
        </div>
    </main>
</div>
@endsection