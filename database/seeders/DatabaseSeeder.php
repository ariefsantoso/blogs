<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\News;
use App\Models\Tags;
use App\Models\PostTags;
use App\Models\Tentang;
use App\Models\Visi;
use App\Models\Kirim;
use App\Models\Konsultasi;
use App\Models\Tanya;
use App\Models\Contact;
use App\Models\Sosmed;
use App\Models\Store;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::create([
            'name' => 'Arief Santoso',
            'username' => 'ariefsan',
            'email' => 'ariefsantoso@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => '1'
        ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Esai',
            'slug' => 'esai'
        ]);

        Category::create([
            'name' => 'Legal Opinion',
            'slug' => 'legal-opinion'
        ]);

        Category::create([
            'name' => 'Jurnal / Penelitian',
            'slug' => 'jurnal-penelitian'
        ]);
        Category::create([
            'name' => 'Justitia Institute',
            'slug' => 'justitia-institute'
        ]);
        Post::factory(50)->create();

        News::create([
            'name' => 'Nasional',
            'slug' => 'nasional'
        ]);
        News::create([
            'name' => 'Wilayah',
            'slug' => 'wilayah'
        ]);
        News::create([
            'name' => 'Kampus',
            'slug' => 'kampus'
        ]);
        News::create([
            'name' => 'Politik',
            'slug' => 'politik'
        ]);


        Tags::create([
            'name' => 'Bisnis',
            'slug' => 'bisnis'
        ]);
        Tags::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan'
        ]);
        Tags::create([
            'name' => 'Budaya',
            'slug' => 'budaya'
        ]);
        Tags::create([
            'name' => 'Sosial',
            'slug' => 'sosial'
        ]);
        Tags::create([
            'name' => 'Capital',
            'slug' => 'capital'
        ]);

        PostTags::factory(100)->create();

        Tentang::create([
            'title' => 'Tentang Kami',
            'slug' => 'tentang-kami',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        ]);

        Visi::create([
            'title' => 'Visi Misi',
            'slug' => 'visi-misi',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        ]);

        Kirim::create([
            'title' => 'Kirim Tulisan',
            'slug' => 'kirim-tulisan',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        ]);

        Konsultasi::create([
            'title' => 'Konsultasi Hukum',
            'slug' => 'konsultasi-hukum',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        ]);

        Tanya::create([
            'title' => 'Tanya Hukum',
            'slug' => 'tanya-hukum',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        ]);
        Contact::create([
            'alamat' => 'Jl. Gajayana No 50 Kota Malang',
            'no_hp' => '081234567890',
            'email' => 'example@gmail.com'
        ]);
        Sosmed::create([
            'ig' => 'instagram.com',
            'fb' => 'facebook.com',
            'twitter' => 'twitter.com'
        ]);

        Store::create([
            'title' => 'Produk Pertama',
            'slug' => 'produk-pertama',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
            'price' => '60000'
        ]);

        Store::create([
            'title' => 'Produk Kedua',
            'slug' => 'produk-kedua',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
            'price' => '70000'
        ]);

        Store::create([
            'title' => 'Produk Ketiga',
            'slug' => 'produk-ketiga',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
            'price' => '75000'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem Ipsum Pertama',
        //     'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem Ipsum kedua',
        //     'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-tiga',
        //     'excerpt' => 'Lorem Ipsum Tiga',
        //     'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
        // ]);
    }
}
