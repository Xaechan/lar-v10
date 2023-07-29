<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ( $i = 0; $i < 7; $i++ ) {
            DB::table('News')->insert([
                'title' => fake()->title(),
                'description' => fake()->paragraph(2, true),
                'category' => fake()->sentence(),
                'author' => fake()->email(),
            ]);
        }
    }
}
