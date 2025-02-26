<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\AlumnoFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name"=>"Raquel",
            "email"=>"b@b.com",
            "password"=>bcrypt("12345678")
        ]);
        // User::factory(10)->create();

        $this->call([
            AlumnoSeeder::class,
            CatSeeder::class,
        ]);

    }
}
