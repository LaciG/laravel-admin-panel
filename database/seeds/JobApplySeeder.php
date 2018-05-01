<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JobApplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_applies')->truncate();

        $faker = Faker::create();
        $applies = [];

        foreach(range(1, 5) as $index) {
            $applies[] = [
            'apply_name' => $faker->name,
            'apply_email' => $faker->email,
            'apply_mobile' => $faker->e164PhoneNumber,
            'apply_job' => $faker->jobTitle,
            'apply_salary' => $faker->numberBetween($min = 100000, $max = 500000),
            'apply_resume' => $faker->imageUrl($width = 640, $height = 480),
            
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            ];
        }
        DB::table('job_applies')->insert($applies);
    }
}
