<?php

use App\Models\Pkg\Pkg;
use Illuminate\Database\Seeder;

class PkgsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pkg::class, 20)->create();
    }
}
