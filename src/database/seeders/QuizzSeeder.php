<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quizz;
use Faker\Guesser\Name;

class QuizzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Quizz::factory()->create([
         "title" => fake()->name(),
         "logo_url" => fake()->name(),
       ]);
    }
}
