<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Banner;
use App\Models\BannerCategory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //php artisan migrate --seed
//        $banners = Banner::factory(10)->make();
//        dd($banners);
//        $cat = Category::factory(10)->make();
//        dd($cat);

//        Category::factory(100)->create();
//        Banner::factory(100)->create();
        BannerCategory::factory(100)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
