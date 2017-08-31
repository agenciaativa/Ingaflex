<?php

use Illuminate\Database\Seeder;

class ManutencaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\Manutencao::truncate();
        factory(\Ingaflex\Entities\Manutencao::class, 1)->create();
    }
}
