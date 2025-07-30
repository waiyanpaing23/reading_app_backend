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
        ]);
    }
}
