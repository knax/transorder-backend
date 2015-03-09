<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $now = Carbon::now('utc')->toDateTimeString();

        $orders = [];

        foreach (range(1, 10) as $index) {
            $order = [
                'color_available_id' => rand(1, 20),
                'amount' => rand(1, 10),
                'isSent' => false,
                'user_id' => $faker->randomDigitNotNull,
                'created_at' => $now,
                'updated_at' => $now
            ];

            $orders[] = $order;
        }

        DB::table('orders')->insert($orders);
    }
}
