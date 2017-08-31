<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Categoria::truncate();
        factory(\Ingaflex\Entities\Categoria::class, 10)->create();
    }
}
