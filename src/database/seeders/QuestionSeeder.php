<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Question::factory()->create([
      "title" => "What keyword is used to declare a variable in JavaScript?",
      "position" => 1,
    ]);

    Question::factory()->create([
      "title" => "What is the output of console.log(typeof []) ?",
      "position" => 2,
    ]); 

    Question::factory()->create([
      "title" => "How do you write a single-line comment in JavaScript?",
      "position" => 3,
    ]);
  }
}
