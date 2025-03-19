<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah dikonfigurasi -->
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="relative w-full max-w-4xl overflow-hidden">
        @php
            $slides = [
                "https://www.purina.co.id/sites/default/files/2023-01/14%20Fakta%20Tentang%20Kucing%20yang%20Unik%20dan%20Menarik%20copy.jpg", 
                "https://rakyatsulsel.fajar.co.id/wp-content/uploads/2024/02/Pecinta-Kucing-menurut-Sifat.jpg", 
                "https://th.bing.com/th/id/OIP.a8hXVR363CJEMnOmBh-GXgHaEo?w=800&h=500&rs=1&pid=ImgDetMain"
            ];
        @endphp

        <!-- Wrapper untuk slide -->
        <div class="flex transition-transform duration-500 ease-in-out w-full" id="slideContainer">
            @foreach ($slides as $slide)
                <img src="{{ $slide }}" class="w-full flex-shrink-0 object-cover rounded-lg">
            @endforeach
        </div>

        <!-- Tombol navigasi -->
        <div >
        <button id="prevSlide" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full shadow-md hover:bg-gray-900">
            ❮
        </button>
        <button id="nextSlide" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full shadow-md hover:bg-gray-900">
            ❯
        </button>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const slideContainer = document.getElementById("slideContainer");
        const slides = slideContainer.children;
        const totalSlides = slides.length;

        function updateSlidePosition() {
            slideContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        document.getElementById("prevSlide").addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlidePosition();
        });

        document.getElementById("nextSlide").addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlidePosition();
        });

        // Auto slide setiap 3 detik
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlidePosition();
        }, 3000);
    </script>
</body>
</html>
