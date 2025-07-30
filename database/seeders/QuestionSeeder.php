<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('true_false_questions')->insert([
            // Paragraph 1
            [
                'paragraph_id' => 1,
                'question_type_id' => 1,
                'question_text' => 'Ellen Terry’s Lady Macbeth costume was decorated with thousands of beetle wings.',
                'keywords' => ['Ellen Terry', 'Lady Macbeth', 'beetle wings', 'dress'],
                'hints' => 'Look for specific details about the dress and its unique decoration.',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 1,
                'question_type_id' => 1,
                'question_text' => 'Ellen Terry only wore plain clothing on stage.',
                'keywords' => ['dress', 'costumes', 'stage presence'],
                'hints' => 'Does the description of her dress sound simple or elaborate?',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Paragraph 2
            [
                'paragraph_id' => 2,
                'question_type_id' => 1,
                'question_text' => 'The National Trust collaborated with costume specialists to restore the dress.',
                'keywords' => ['National Trust', 'costume experts', 'collaborated', 'conservation'],
                'hints' => 'Find who worked with the National Trust on the dress.',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 2,
                'question_type_id' => 1,
                'question_text' => 'The condition of the dress improved over the years.',
                'keywords' => ['deteriorate', 'poor condition'],
                'hints' => 'Pay attention to the words describing the dress’s condition over time.',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Paragraph 3
            [
                'paragraph_id' => 3,
                'question_type_id' => 1,
                'question_text' => 'Zenzie Tinker decided to completely replace the dress fabric.',
                'keywords' => ['minimal intervention', 'stabilize', 'not replace'],
                'hints' => 'What approach did the restoration team choose?',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 3,
                'question_type_id' => 1,
                'question_text' => 'The team restored the dress while maintaining its authenticity.',
                'keywords' => ['remained authentic', 'stabilize', 'minimal intervention'],
                'hints' => 'Check how they balanced restoration and preservation.',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Paragraph 4
            [
                'paragraph_id' => 4,
                'question_type_id' => 1,
                'question_text' => 'Ellen Terry preferred her costumes to be designed by professional designers only.',
                'keywords' => ['hands-on involvement', 'reworking garments'],
                'hints' => 'Did she take part in designing or altering costumes herself?',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 4,
                'question_type_id' => 1,
                'question_text' => 'The preserved dress is now on display in a museum.',
                'keywords' => ['museum', 'preserved dress'],
                'hints' => 'Look for the current status or location of the dress.',
                'time_limit' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
