<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParagraphSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paragraphs')->insert([
            [
                'passage_id' => 1,
                'content' => 'Ellen Terry, a prominent actress of the late 19th century, captivated audiences with her powerful stage presence and elaborate costumes. One of her most iconic outfits was the beetle-wing dress worn during her performance as Lady Macbeth. The gown, adorned with thousands of shimmering iridescent beetle wings, became a symbol of theatrical extravagance in Victorian England.',
                'order' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'passage_id' => 1,
                'content' => 'Over time, the once-vibrant costume began to deteriorate due to exposure to light, moisture, and age. When the National Trust acquired it, the dress was in poor condition. Recognizing its historical significance, the organization collaborated with costume experts to explore potential conservation methods. They conducted detailed research into the fabric, stitching techniques, and insect wings used in the original garment.',
                'order' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'passage_id' => 1,
                'content' => 'The restoration process was led by Zenzie Tinker, a renowned textile conservator. Her team faced difficult decisions—whether to preserve the dress in its aged state or restore it to its former glory. After consultations and careful planning, they opted for minimal intervention, choosing to stabilize the fabric rather than replace it. This ensured the dress remained authentic while also safe for display.',
                'order' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'passage_id' => 1,
                'content' => 'Ellen Terry was known for her hands-on involvement in costume design, often reworking garments to suit her characters. While this approach may have seemed unusual at the time, it reflected her dedication to realism and theatrical expression. The preserved dress now stands in a museum, reminding visitors of her influence on stagecraft and fashion in the Victorian era.',
                'order' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // 5
            [
                'passage_id' => null,
                'content' => 'Plastic pollution has become a global environmental crisis. Millions of tons of plastic waste end up in oceans each year, harming marine life and entering the food chain. While recycling efforts have increased, experts emphasize that reducing plastic usage at the source is the most effective long-term solution.',
                'order' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // 6
            [
                'passage_id' => null,
                'content' => 'Honeybees are crucial to the ecosystem due to their role in pollination. They help many plants reproduce, including crops that humans rely on for food. However, honeybee populations have been declining due to factors like pesticide use, habitat loss, and climate change.',
                'order' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // 7
            [
                'passage_id' => null,
                'content' => 'In recent decades, urban green spaces have become increasingly important in city planning. These areas not only provide recreational spots for citizens but also improve air quality, reduce heat, and support mental well-being. Cities like Singapore and Copenhagen have been praised for their efforts in integrating parks, vertical gardens, and tree-lined streets into their urban environments.',
                'order' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // 8
            [
                'passage_id' => null,
                'content' => 'Marie Curie’s groundbreaking work in the late 19th and early 20th centuries revolutionized the field of science. Alongside her husband Pierre, she discovered the radioactive elements polonium and radium, contributing significantly to the understanding of atomic structure. Despite facing gender discrimination in academia, she persisted in her research and became the first woman to receive a Nobel Prize. Later, she made history again by winning a second Nobel Prize—this time in a different scientific field—becoming the only person ever to achieve this distinction.',
                'order' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
