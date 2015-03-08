<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ProductSeeder');
        $this->call('UserSeeder');
        $this->call('OrderSeeder');
        $this->call('DeliveryServiceSeeder');
        $this->call('ShipmentSeeder');
    }

}
