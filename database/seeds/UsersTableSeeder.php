<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {

            $rand_date = $faker->dateTimeBetween($startDate = '-1 months', $endDate = 'now', $timezone = date_default_timezone_get());

            DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'rfid' => str_random(10),
                'region_id' => '15',
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'created_at' => $rand_date,
                'updated_at' => $rand_date
            ]);
        }

    }
}
