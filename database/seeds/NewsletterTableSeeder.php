<?php

use Illuminate\Database\Seeder;
use Ingaflex\Entities\Newsletter;

class NewsletterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\Newsletter::truncate();
        factory(Newsletter::class, 1)->create();
    }
}
