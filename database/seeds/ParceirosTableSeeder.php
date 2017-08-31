<?php

use Illuminate\Database\Seeder;

class ParceirosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\Parceiros::truncate();
        factory(\Ingaflex\Entities\Parceiros::class, 3)->create();
    }
}
