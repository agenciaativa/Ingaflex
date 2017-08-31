<?php

use Illuminate\Database\Seeder;
use Ingaflex\Entities\Newsletter;

class FraseHomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\FraseHome::truncate();
        factory(\Ingaflex\Entities\FraseHome::class, 1)->create();
    }
}
