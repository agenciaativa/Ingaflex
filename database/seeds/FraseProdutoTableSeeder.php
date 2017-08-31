<?php

use Illuminate\Database\Seeder;

class FraseProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\FraseProduto::truncate();
        factory(\Ingaflex\Entities\FraseProduto::class, 10)->create();
    }
}
