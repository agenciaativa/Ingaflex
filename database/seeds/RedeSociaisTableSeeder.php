<?php

use Illuminate\Database\Seeder;

class RedeSociaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\RedeSociais::truncate();
        factory(\Ingaflex\Entities\RedeSociais::class, 3)->create();
    }
}
