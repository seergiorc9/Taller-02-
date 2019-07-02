<?php

use Illuminate\Database\Seeder;

class RecetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas')-> insert ([
            'id_cliente' => 1,
            'id_farmaco' => 1,
            'comentario' => 'salva de apuros',
            'total' => 2500,
            ]);
    }
}
