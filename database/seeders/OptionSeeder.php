<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert([
            // question 1
            [
                'question_id' => 1,
                'content' => 'true',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 1,
                'content' => 'false',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 1,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 2
            [
                'question_id' => 2,
                'content' => 'true',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 2,
                'content' => 'false',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 2,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 3
            [
                'question_id' => 3,
                'content' => 'true',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 3,
                'content' => 'false',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 3,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 4
            [
                'question_id' => 4,
                'content' => 'true',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 4,
                'content' => 'false',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 4,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 5
            [
                'question_id' => 5,
                'content' => 'true',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 5,
                'content' => 'false',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 5,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 6
            [
                'question_id' => 6,
                'content' => 'true',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 6,
                'content' => 'false',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 6,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 7
            [
                'question_id' => 7,
                'content' => 'false',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 7
            [
                'question_id' => 7,
                'content' => 'true',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 7,
                'content' => 'false',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 7,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 8
            [
                'question_id' => 8,
                'content' => 'true',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 8,
                'content' => 'false',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 8,
                'content' => 'not given',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 9
            [
                'question_id' => 9,
                'content' => 'A. Marine animals are endangered.',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 9,
                'content' => 'B. Recycling is the only way to solve plastic pollution.',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 9,
                'content' => 'C. Plastic pollution is a global problem that requires reducing usage.',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 10
            [
                'question_id' => 10,
                'content' => 'A. Why honeybees sting humans.',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 10,
                'content' => 'B. The role and decline of honeybee populations.',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 10,
                'content' => 'C. How honey is produced.',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 11
            [
                'question_id' => 11,
                'content' => 'A. Why People Prefer Country Life Over Cities',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 11,
                'content' => 'B. How Cities are Replacing Roads with Parks',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'question_id' => 11,
                'content' => 'C. The Rise of Urban Green Spaces in City Planning',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // question 12
            [
                'question_id' => 12,
                'content' => 'husband',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
