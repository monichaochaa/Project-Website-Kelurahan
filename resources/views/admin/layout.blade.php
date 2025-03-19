<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="flex">  <!-- Flexbox untuk membagi sidebar & konten utama -->
        <aside class="w-64 flex">
          <!-- Latest Posts -->
          @if(request()->is('/admin'))
              @include('components.sideadmin', ['latestPosts' => $latestPosts])
          @endif
    <x-sideadmin> </x-sideadmin>
</aside>

<main class="flex-1"> <!-- Konten utama -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    </div>
    <main>
        @yield('content')
    </main>
</body>
</html>
