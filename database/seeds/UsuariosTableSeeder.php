<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Ingaflex\Entities\User::truncate();
        factory(\Ingaflex\Entities\User::class, 1)->create([
            'name' => 'Jean Dias',
            'email' => 'jean.dias@agenciaativa.com.br',
            'username' => 'jeandias',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(15),
        ]);

        factory(\Ingaflex\Entities\User::class, 3)->create();
    }
}
