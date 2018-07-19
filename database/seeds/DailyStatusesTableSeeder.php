<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DailyStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startDate = '2018-01-01';
        $endDate = '2018-12-31';
        $faker = Faker::create('App\DailyStatus');
        $primary_keys = array();
        for($i = 0; $i < 5000; $i++){
            $id = rand(1, 25);
            $date = ($faker->dateTimeBetween($startDate, $endDate))->format('Y-m-d');

            if(in_array($id."-".$date, $primary_keys)){
                $i--;
            }
            else{
                array_push($primary_keys,  $id."-".$date);
                DB::table('daily_statuses')->insert([
                    'student_id' => $id,
                    'day' => $date,
                    'status' => $faker->randomElement([null ,'S', 'N', 'O'])
                ]);
            }
        }
    }
}
