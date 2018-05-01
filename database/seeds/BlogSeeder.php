<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->truncate();

        $faker = Faker::create();
        $blogposts = [];

        foreach(range(1, 20) as $index) {
            $blogposts[] = [
            'blog_title' => $faker->word,
            'blog_category' => $faker->word,
            'language' => $faker->word,
            'blog_start_post' => $faker->paragraph,
            'blog_rest_post' => $faker->paragraph,
            'blog_cover_image' => $faker->imageUrl($width = 640, $height = 480),
            'blog_cover_image_alt' => $faker->word,
            'blog_meta_description' => $faker->word,
            'blog_meta_keywords' => $faker->word,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            ];
        }
        DB::table('blog')->insert($blogposts);
    }
}
