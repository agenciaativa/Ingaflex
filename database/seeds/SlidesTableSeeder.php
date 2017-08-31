<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\Ingaflex\Entities\Slides::truncate();
        factory(\Ingaflex\Entities\Slides::class, 3)->create();
    }
}
