<?php

use Illuminate\Database\Seeder;

class ConfiguracoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Configuracoes::truncate();
        factory(\Ingaflex\Entities\Configuracoes::class, 1)->create();
    }
}
