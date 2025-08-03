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
        DB::table('questions')->insert([
            // Paragraph 1
            [
                'paragraph_id' => 1,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'Ellen Terry’s Lady Macbeth costume was decorated with thousands of beetle wings.',
                'keywords' => json_encode(['Ellen Terry', 'Lady Macbeth', 'beetle wings', 'dress']),
                'hints' => 'Look for specific details about the dress and its unique decoration.',
                'time_limit' => 60,
                'strategy_id' => 1,
                'note' => 'scanning',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 1,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'Ellen Terry only wore plain clothing on stage.',
                'keywords' => json_encode(['dress', 'costumes', 'stage presence']),
                'hints' => 'Does the description of her dress sound simple or elaborate?',
                'time_limit' => 60,
                'strategy_id' => 2,
                'note' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Paragraph 2
            [
                'paragraph_id' => 2,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'The National Trust collaborated with costume specialists to restore the dress.',
                'keywords' => json_encode(['National Trust', 'costume experts', 'collaborated', 'conservation']),
                'hints' => 'Find who worked with the National Trust on the dress.',
                'time_limit' => 60,
                'strategy_id' => null,
                'note' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 2,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'The condition of the dress improved over the years.',
                'keywords' => json_encode(['deteriorate', 'poor condition']),
                'hints' => 'Pay attention to the words describing the dress’s condition over time.',
                'time_limit' => 60,
                'strategy_id' => null,
                'note' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Paragraph 3
            [
                'paragraph_id' => 3,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'Zenzie Tinker decided to completely replace the dress fabric.',
                'keywords' => json_encode(['minimal intervention', 'stabilize', 'not replace']),
                'hints' => 'What approach did the restoration team choose?',
                'time_limit' => 60,
                'strategy_id' => null,
                'note' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 3,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'The team restored the dress while maintaining its authenticity.',
                'keywords' => json_encode(['remained authentic', 'stabilize', 'minimal intervention']),
                'hints' => 'Check how they balanced restoration and preservation.',
                'time_limit' => 60,
                'strategy_id' => null,
                'note' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Paragraph 4
            [
                'paragraph_id' => 4,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'Ellen Terry preferred her costumes to be designed by professional designers only.',
                'keywords' => json_encode(['hands-on involvement', 'reworking garments']),
                'hints' => 'Did she take part in designing or altering costumes herself?',
                'time_limit' => 60,
                'strategy_id' => null,
                'note' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 4,
                'passage_id' => 1,
                'question_type_id' => 1,
                'content' => 'The preserved dress is now on display in a museum.',
                'keywords' => json_encode(['museum', 'preserved dress']),
                'hints' => 'Look for the current status or location of the dress.',
                'time_limit' => 60,
                'strategy_id' => null,
                'note' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Skimming
            [
                'paragraph_id' => 5,
                'passage_id' => null,
                'question_type_id' => 2,
                'content' => 'What is the main idea of the paragraph?',
                'keywords' => json_encode(['plastic pollution', 'global environmental crisis', 'reducing plastic usage', 'long-term solution']),
                'hints' => 'Skim the entire paragraph, especially the first and last sentences.',
                'time_limit' => 60,
                'strategy_id' => 1,
                'note' => 'skimming',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 6,
                'passage_id' => null,
                'question_type_id' => 2,
                'content' => 'What is the main focus of this paragraph?',
                'keywords' => json_encode(['crucial', 'pollination', 'help', 'declining', 'habitat loss', 'climate change']),
                'hints' => 'Look for what the paragraph is mostly about — both importance and threats.',
                'time_limit' => 60,
                'strategy_id' => 1,
                'note' => 'skimming',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'paragraph_id' => 7,
                'passage_id' => null,
                'question_type_id' => 2,
                'content' => 'What is the best title for this paragraph?',
                'keywords' => json_encode(['urban green spaces', 'city planning', 'parks', 'air quality', 'mental well-being']),
                'hints' => 'Look at the first and last sentences — what theme do both support? Focus on the overall development in urban planning.',
                'time_limit' => 60,
                'strategy_id' => 1,
                'note' => 'skimming',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Scanning
            [
                'paragraph_id' => 8,
                'passage_id' => null,
                'question_type_id' => 3,
                'content' => 'Marie Curie discovered the elements polonium and radium with her _______.',
                'keywords' => json_encode(['discovered', 'elements', 'polonium', 'radium', 'Pierre']),
                'hints' => 'Scan for the part that discusses her discoveries in the field of radioactivity.',
                'time_limit' => 60,
                'strategy_id' => 1,
                'note' => 'scanning',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
