<?php

use Illuminate\Database\Seeder;

class OrcamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\Orcamento::truncate();
        factory(\Ingaflex\Entities\Orcamento::class, 10)->create();
    }
}
