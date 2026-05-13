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
      "title" => "HTML",
      "logo_url" => "/src/public/assets/icon/html.svg",
    ]);

    Quizz::factory()->create([
      "title" => "CSS",
      "logo_url" => "/src/public/assets/icon/css.svg",
    ]);

    Quizz::factory()->create([
      "title" => "JavaScript",
      "logo_url" => "/src/public/assets/icon/js.svg",
    ]);

    Quizz::factory()->create([
      "title" => "Accessibility",
      "logo_url" => "/src/public/assets/icon/accessibility.svg",
    ]);
  }
}
