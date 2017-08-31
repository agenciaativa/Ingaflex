<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Clientes::truncate();
        factory(\Ingaflex\Entities\Clientes::class, 10)->create();
    }
}
