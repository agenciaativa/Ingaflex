<?php

use Illuminate\Database\Seeder;

class GaleriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Galeria::truncate();
        factory(\Ingaflex\Entities\Galeria::class, 5)->create();
    }
}
