<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ini gagal pindah ke factories
     */
    public function run(): void
    {
        // for ( $i = 0; $i < 7; $i++ ) {
        //     DB::table('News')->insert([
        //         'title' => fake()->sentence(),
        //         'description' => fake()->paragraph(2, true),
        //         'category' => fake()->text(),
        //         'author' => fake()->email(),
        //     ]);
        // }

        News::factory()->count(20)->create();
    }
}
