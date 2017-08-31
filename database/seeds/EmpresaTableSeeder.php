<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Empresa::truncate();
        factory(\Ingaflex\Entities\Empresa::class, 1)->create();
    }
}
