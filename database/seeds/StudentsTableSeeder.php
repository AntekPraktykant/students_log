<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pl_PL','App\Student');
        for($i = 0; $i < 25; $i++){
            DB::table('students')->insert([
                'name' => $faker->name()
            ]);
        }
    }
}
