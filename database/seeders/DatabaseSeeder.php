<?php

namespace Database\Seeders;

use App\Models\Menu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post:: factory(20)->recycle([
            Category::all(),
            User::all()
        ])->create();

         // Menu utama
    $home = Menu::create(['name' => 'Beranda', 'url' => '/']);
    $posts = Menu::create(['name' => 'Berita', 'url' => '/posts']);
    $pemerintah = Menu::create(['name' => 'Pemerintah Kota Madiun', 'url' => 'https://madiunkota.go.id/']);
    $kelurahan = Menu::create(['name' => 'Kelurahan', 'url' => '/kelurahan']);
    $login = Menu::create(['name' => 'login', 'url' => '/login']);

    // Submenu Pemerintah Kota Madiun
    Menu::create(['name' => 'Kecamatan Kartoharjo', 'url' => 'https://kecamatan-kartoharjo.madiunkota.go.id/', 'parent_id' => $pemerintah->id]);
    Menu::create(['name' => 'Kecamatan Taman', 'url' => 'https://kecamatan-taman.madiunkota.go.id/', 'parent_id' => $pemerintah->id]);
    Menu::create(['name' => 'Kecamatan Manguharjo', 'url' => 'https://kecamatan-manguharjo.madiunkota.go.id/', 'parent_id' => $pemerintah->id]);

    //Submenu Kelurahan Kota Madiun
    Menu::create(['name' => 'Kelurahan Taman', 'url' => 'https://kelurahan-taman.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Banjarejo', 'url' => 'https://kelurahan-banjarejo.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Demangan', 'url' => 'https://kelurahan-demangan.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Kejuron', 'url' => 'https://kelurahan-kejuron.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Josenan', 'url' => 'https://kelurahan-josenan.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Pandean', 'url' => 'https://kelurahan-pandean.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Manisrejo', 'url' => 'https://kelurahan-manisrejo.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Mojorejo', 'url' => 'https://kelurahan-mojorejo.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);
    Menu::create(['name' => 'Kelurahan Kuncen', 'url' => 'https://kelurahan-kuncen.madiunkota.go.id/', 'parent_id' => $kelurahan->id]);

        }
}
