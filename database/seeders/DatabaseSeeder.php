<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    Category::create([
    'name' => 'Bahasa',
    'slug' => 'bahasa'
    ]);
    Category::create([
    'name' => 'Agama',
    'slug' => 'agama'
    ]);
    Category::create([
    'name' => 'Sejarah',
    'slug' => 'sejarah'
    ]);
    Category::create([
    'name' => 'Ilmu Pengetahuan',
    'slug' => 'ilmu-pengetahuan'
    ]);
    Category::create([
    'name' => 'Ilmu Sosial',
    'slug' => 'ilmu-sosial'
    ]);
    Category::create([
    'name' => 'Kesastraan',
    'slug' => 'kesastraan'
    ]);
    }
}

