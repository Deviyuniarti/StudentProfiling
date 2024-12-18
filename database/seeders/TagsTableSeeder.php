<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;


class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array tag yang lebih lengkap dalam lingkup IT
        $tags = [
            'Designer',
            'Developer',
            'Data Analyst',
            'Digital Marketer',
            'DevOps Engineer',
            'Backend',
            'Frontend',
            'Full Stack',
            'UI/UX Designer',
            'Graphist',
            'Cloud Computing',
            'Machine Learning',
            'AI Developer',
            'Blockchain',
            'Cyber Security',
            'Database Administrator',
            'QA Engineer',
            'System Administrator',
            'Product Manager',
            'Project Manager'
        ];

        // Loop untuk memasukkan setiap tag ke dalam database
        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}

