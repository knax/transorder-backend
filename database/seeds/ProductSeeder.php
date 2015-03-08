<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $now = Carbon::now('utc')->toDateTimeString();

        $products = [];

        foreach (range(1, 10) as $index) {
            $product = [
                'code' => $faker->randomNumber(4),
                'name' => $faker->sentence(3),
                'description' => $faker->realText(),
                'price' => $faker->randomNumber(5),
                'photo' => $faker->imageUrl(),
                'created_at' => $now,
                'updated_at' => $now
            ];

            $products[] = $product;
        }

        DB::table('products')->insert($products);

        $colors = [];

        foreach (range(1, 10) as $index) {
            foreach (range(1, 2) as $insideIndex) {
                $color = [
                    'name' => $faker->colorName,
                    'stock' => $faker->randomNumber(2),
                    'product_id' => $index,
                    'created_at' => $now,
                    'updated_at' => $now
                ];

                $colors[] = $color;
            }
        }

        DB::table('colors_available')->insert($colors);

    }

}