<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $now = Carbon::now('utc')->toDateTimeString();

        $shipments = [];

        foreach (range(1, 5) as $index) {
            $shipment = [
                'receiver_name' => $faker->name,
                'receiver_address' => $faker->address,
                'total_price' => $faker->randomNumber(6),
                'status' => $faker->randomElement([
                    'shipment.status.unpaid',
                    'shipment.status.paid',
                    'shipment.status.sent'
                ]),
                'delivery_service_id' => rand(1, 4),
                'created_at' => $now,
                'updated_at' => $now
            ];

            $shipments[] = $shipment;
        }

        DB::table('shipments')->insert($shipments);

        $orders = [];

        foreach (range(1, 10) as $index) {
            $order = [
                'color_available_id' => rand(1, 20),
                'amount' => rand(1, 10),
                'isSent' => true,
                'user_id' => $faker->randomDigitNotNull,
                'created_at' => $now,
                'updated_at' => $now
            ];

            $orders[] = $order;
        }

        DB::table('orders')->insert($orders);

        $orderShipments = [];

        foreach (range(1, 5) as $index) {
            foreach (range(0, 1) as $innerIndex) {
                $orderShipment = [
                    'order_id' => ($index * 2) - $innerIndex,
                    'shipment_id' => $index,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }

            $orderShipments[] = $orderShipment;
        }

        DB::table('order_shipment')->insert($orderShipments);
    }
}
