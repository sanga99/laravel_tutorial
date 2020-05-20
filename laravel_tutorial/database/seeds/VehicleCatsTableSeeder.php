<?php

use Illuminate\Database\Seeder;

class VehicleCatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VehicleCat::class, 20)->create();
    }
}
