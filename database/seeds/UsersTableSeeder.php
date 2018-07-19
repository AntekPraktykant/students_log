<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pl-PL', 'App\User');
        for($i = 0; $i < 25; $i++) {
            DB::table('users')->insert([
                //'id' => $faker->id(),
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'password' => bcrypt('pass')
            ]);
        }
        DB::table('users')->insert([
            //'id' => $faker->id(),
            'name' => 'demo',
            'email' => 'demo@demo.pl',
            'password' => bcrypt('demo')
        ]);
    }
}
