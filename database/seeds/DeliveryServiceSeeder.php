<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DeliveryServiceSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $now = Carbon::now('utc')->toDateTimeString();

        $deliveryServices = [];

        foreach (range(1, 4) as $index) {
            $deliveryService = [
                'name' => $faker->word,
                'created_at' => $now,
                'updated_at' => $now
            ];

            $deliveryServices[] = $deliveryService;
        }

        DB::table('delivery_services')->insert($deliveryServices);

    }

}