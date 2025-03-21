<?php

use App\Models\Menu;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $latestPosts = Post::latest()->take(5)->get();
    $posts = Post::latest()->paginate(9);
    return view('home', [
        'title' => '# Top Tags',
        'posts' => $posts,
        'latestPosts' => $latestPosts
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Kategori: Berita',
        'posts' => Post::filter(request(['search', 'category', 'author']))
            ->latest()->paginate(9)->appends(request()->query())
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => 'Articles in: ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/contact', fn() => view('contact', ['title' => 'Contact Me']));
Route::get('/about', fn() => view('about', ['title' => 'About']));
Route::get('/kelurahan', fn() => view('kelurahan', ['title' => 'KELURAHAN']));

// ✅ Gunakan Middleware 'auth' untuk rute admin
Route::middleware(['auth'])->group(function () {
    // Dashboard Admin
    Route::get('/admin', function () {
        $menus = Menu::whereNull('parent_id')->with('children')->get();
        $routes = collect(Route::getRoutes())->map(fn($route) => $route->uri())
            ->filter(fn($uri) => !str_contains($uri, '{'))
            ->values()->toArray();

        if (empty($routes)) {
            $routes = ['login'];
        }

        return view('admin.dashboard', compact('menus', 'routes'));
    })->name('admin.dashboard');

    // Tambah Menu
    Route::post('/admin/menu/add', function (Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'parent_id' => 'nullable|integer|exists:menus,id',
        ]);

        Menu::create($data);
        return redirect()->route('admin.dashboard')->with('success', 'Menu berhasil ditambahkan!');
    })->name('menu.add');

    // Hapus Menu
    Route::delete('/admin/menu/delete/{id}', function ($id) {
        Menu::findOrFail($id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Menu berhasil dihapus!');
    })->name('menu.delete');

    // Blog Admin
    Route::get('/admin/blog', function () {
        $posts = Post::latest()->get();
        return view('admin.blog', compact('posts'));
    })->name('admin.blog');

    // Tambah Berita
    Route::get('/admin/posts/add', function () {
        // $categories =  DB::table('categories')->get();
        // dd($categories);// Ambil semua kategori dari database
        $posts = Post::all(); // Ambil semua berita
        return view('admin.blog', with('categories', 'posts'));
    })->name('admin.posts.add');

    Route::post('/admin/posts/add', function (Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id', // Pastikan ini menggunakan ID, bukan string
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('public/images');
        }
    
        Post::create($data);
        
        return redirect()->route('admin.blog')->with('success', 'Berita berhasil ditambahkan!');
    });

    // Edit Berita
    Route::get('/admin/posts/edit/{post}', fn(Post $post) => view('admin.edit', compact('post')))
        ->name('admin.posts.edit');

    // Update Berita
    Route::put('/admin/posts/update/{post}', function(Request $request, Post $post) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('public/images');
        }

        $post->update($data);
        return redirect()->route('admin.blog')->with('success', 'Berita berhasil diperbarui!');
    })->name('admin.posts.update');

    // Hapus Berita
    Route::delete('/admin/posts/delete/{post}', function (Post $post) {
        $post->delete();
        return redirect()->route('admin.blog')->with('success', 'Berita berhasil dihapus!');
    })->name('admin.posts.delete');

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

// Login
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/admin');
    }

    return back()->withErrors(['loginError' => 'Username atau password salah']);
})->name('login.process');
