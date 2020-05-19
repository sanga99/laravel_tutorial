<?php

use App\Models\Prod\Prod;
use Illuminate\Database\Seeder;

class ProdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Prod::class, 20)->create();
    }
}
