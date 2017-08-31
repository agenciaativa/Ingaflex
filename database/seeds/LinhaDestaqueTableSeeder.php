<?php

use Illuminate\Database\Seeder;

class LinhaDestaqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\LinhaDestaque::truncate();
        factory(\Ingaflex\Entities\LinhaDestaque::class, 3)->create();
    }
}
