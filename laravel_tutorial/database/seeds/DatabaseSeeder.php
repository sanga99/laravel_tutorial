<?php

use App\Models\Pkg\Pkg;
use App\Models\Prod\Prod;
use App\Models\Subsc\Subsc;
use App\Models\Vehicle\Vehicle;
use App\Models\VehicleCat\VehicleCat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Prod::truncate();
        Pkg::truncate();
        Subsc::truncate();
        Vehicle::truncate();
        VehicleCat::truncate();
        // $this->call(UserSeeder::class);
        $this->call(ProdsTableSeeder::class);
        $this->call(PkgsTableSeeder::class);
        $this->call(SubscTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(VehicleCatsTableSeeder::class);
    }
}
