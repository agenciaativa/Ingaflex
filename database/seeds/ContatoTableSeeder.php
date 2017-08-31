<?php

use Illuminate\Database\Seeder;

class ContatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Contato::truncate();
        factory(\Ingaflex\Entities\Contato::class, 10)->create();
    }
}
