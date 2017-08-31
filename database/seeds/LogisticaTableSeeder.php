<?php

use Illuminate\Database\Seeder;

class LogisticaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\Logistica::truncate();
        factory(\Ingaflex\Entities\Logistica::class, 1)->create();
    }
}
