<aside >
    <div class="w-80 bg-white p-4 border border-gray-300 h-fit mb-8 mt-12">
    <div class="bg-blue-600 text-white font-bold p-2">CARI</div>
    <form>
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        
        @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        
        <div class="flex mt-2">
            <div class="relative w-full">
                <input class="block p-2 pl-10 w-full text-sm text-gray-900 bg-white border border-gray-300 rounded-l focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Search for article" type="search" id="search" name="search" autocomplete="off">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <button type="submit" class="px-4 py-1 text-white bg-blue-600 border border-blue-700 rounded-r hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">Search</button>
        </div>
    </form>
</div>

    <div class="mt-4 w-80 bg-white p-4 border border-gray-300 h-fit top-4 mb-8">
        <h3 class="bg-blue-600 text-white p-2 font-bold">INDEX BERITA</h3>
        <ul class="list-none p-0 m-0">
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700">DENAH DAN DATA BLOK MAKAM CILIWUNG KELURAHAN TAMAN</a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700">PERSYARATAN MENGURUS KLAIM BPJS JKK JKM KOTA MADIUN</a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700">Informasi pelayanan kantor kelurahan</a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700">100 PMT CSR PT. Sumber Alfaria Tbk. (Alfamart) Ciliwung untuk Balita Kelurahan Taman</a>
            </li>
            <li class=" p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700">ALUR PENGADUAN PELAYANAN PUBLIK KELURAHAN TAMAN</a>
            </li>
        </ul>
    </div>

    <div class="mt-4 w-80 bg-white p-4 border border-gray-300 h-fit top-4 mb-8">
        <h3 class="bg-blue-600 text-white p-2 font-bold">KATEGORI</h3>
        <ul class="list-none p-0 m-0">
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Alur Layanan Informasi </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Artikel </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Aspirasi dan Pengaduan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Bagan Struktur </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Bantuan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Berita </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Cinta Statistik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Daftar Informasi Publik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Data Pegawai </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Data Statistik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Dokumen Perjanjian Kerja </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Galeri </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Indek Kepuasan Masyarakat </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Infografis </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Informasi Dikecualikan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Informasi Publik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Informasi Secara Berkala </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Informasi Serta Merta </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Informasi Setiap Saat </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Kedudukan dan Domisili </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Kependudukan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Kontak PPID </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Laporan Harta Kekayaan ASN </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Laporan PPID </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Layanan Publik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Maklumat Pelayanan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Media Sosial </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Nama-Nama Penjabat Struktural </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Potensi Wisata </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> PPID </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Produk Hukum </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Profil </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Program dan Kegiatan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Respon Tindak Lanjut </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> RKA-DPA-DPPA </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> RUP </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Sejarah </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> SOP dan Persyaratan Pelayanan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Standar Pelayanan Publik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Struktur Organisasi </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Struktur PPID </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Survey Kepuasan Masyarakat </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Tentang </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Tugas dan Fungsi PPID </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Tupoksi </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Visi Misi </a>
            </li>
            <li class=" p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Wilayah Geografis </a>
            </li>
        </ul>
    </div>

    <div class="mt-4 w-80 bg-white p-4 border border-gray-300 h-fit top-4 mb-8">
        <ul class="list-none p-0 m-0">
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Login </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> TUTORIAL PENGGUNAAN PECEL TUMPANG </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Produk Hukum Kelurahan Taman </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Kelurahan </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> KEL.TAMAN MERAIH TROPY UTAMA NASIONAL PROGRAM 
                    KAMPUNG IKLIM DARI KEMENTRIAN LINGKUNGAN HIDUP DAN KEHUTANAN REPUBLK INDONESIA </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Program Walikota Bersama Rakyat </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> PROGRAM WALIKOTA BERSAMA RAKYAT </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> PENGADUAN MASYARAKAT DAN TINDAK LANJUTNYA </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Survey Kepuasan Masyarakat Online Mandiri (Opini saran masukan)  </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> PROGRAM WALIKOTA BERSAMA RAKYAT </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> HASIL Survey Kepuasan Masyarakat Kelurahan Taman dan Evaluasi Pelayanan Publik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> STANDAR PELAYANAN 6 KOMPONEN </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Jenis dan Syarat Layanan Terupload juga di SIPPN </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> PECEL TUMPANG KELURAHAN TAMAN </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Penerimaan Penganugrahan Kiat 2022 
                    Kelurahan Terinovatif 1 Kategori 2 pada Inovasi Pecel Tumpang </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> PERTEMUAN SOSIALISASI ATAU PEMICUAN 
                    SANITASI TOTAL BERBASIS MASYARAKAT (STBM) DI KELURAHAN TAMAN PADA TANGGAL 17 SEPTEMBER 2019 </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Berita </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Struktu Organisasi </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Layanan Publik </a>
            </li>
            <li class="border-b border-gray-300 p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> PPID </a>
            </li>
            <li class="p-2">
                <a href="#" class="text-black font-semibold hover:underline hover:text-blue-700"> Program dan Kegiatan </a>
            </li>
        </ul>
    </div>

</aside>
