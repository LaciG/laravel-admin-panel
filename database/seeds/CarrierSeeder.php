<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrier')->truncate();

        $faker = Faker::create();
        $carrier = [];

        foreach(range(1, 20) as $index) {
            $carrier[] = [
            'job_title' => $faker->word,
            'job_language' => $faker->word,
            'job_description' => $faker->paragraph,
            'job_place' => $faker->city,
            'job_type' => $faker->word,
            'job_time' => $faker->word,
            'job_level' => $faker->word,
            'job_goodtoknow' => $faker->paragraph,
            'job_active' => $faker->word,
            'job_meta_description' => $faker->word,
            'job_meta_keywords' => $faker->word,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            ];
        }
        DB::table('carrier')->insert($carrier);
    }
}
