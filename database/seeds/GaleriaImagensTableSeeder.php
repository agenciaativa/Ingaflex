<?php

use Illuminate\Database\Seeder;

class GaleriaImagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\GaleriaImagens::truncate();
        factory(\Ingaflex\Entities\GaleriaImagens::class, 10)->create();
    }
}
