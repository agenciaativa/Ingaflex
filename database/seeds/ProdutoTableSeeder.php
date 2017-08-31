<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Produtos::truncate();
        factory(\Ingaflex\Entities\Produtos::class, 10)->create();
    }
}
