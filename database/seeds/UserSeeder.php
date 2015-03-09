<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $now = Carbon::now('utc')->toDateTimeString();

        $users = [];

        foreach (range(1, 10) as $index) {
            $user = [
                'username' => $faker->userName,
                'password' => Hash::make('standar'),
                'type' => 'user',
                'created_at' => $now,
                'updated_at' => $now
            ];

            $users[] = $user;
        }

        DB::table('users')->insert($users);

        $userDetails = [];

        foreach (range(1, 10) as $index) {
            $userDetail = [
                'name' => $faker->name,
                'address' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->email,
                'photo' => $faker->imageUrl(),
                'balance' => $faker->randomDigit(6),
                'user_id' => $index,
                'created_at' => $now,
                'updated_at' => $now
            ];

            $userDetails[] = $userDetail;
        }

        DB::table('user_details')->insert($userDetails);
    }
}
