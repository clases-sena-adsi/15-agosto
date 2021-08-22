<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory  as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 10000; $i++) {
            User::create([
                'names' => $faker->name,
                'lastnames' => $faker->lastName,
                'email' => $faker->email
            ]);
        }
    }
}
