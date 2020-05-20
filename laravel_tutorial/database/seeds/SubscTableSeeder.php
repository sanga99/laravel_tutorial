<?php

use App\Models\Subsc\Subsc;
use Illuminate\Database\Seeder;

class SubscTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subsc::class, 20)->create();
    }
}
