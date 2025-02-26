<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cats')->insert([
            [
                'name' => 'Michi',
                'age' => 2,
                'image' => 'images/cats/michi.jpg',
                'adoptable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bigotes',
                'age' => 3,
                'image' => '<images>
                <cats>bigotes.jpg',
                'adoptable' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luna',
                'age' => 1,
                'image' => 'images/cats/luna.jpg',
                'adoptable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Foobar',
                'age' => 8,
                'image' => 'images/cats/foobar.jpg',
                'adoptable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}