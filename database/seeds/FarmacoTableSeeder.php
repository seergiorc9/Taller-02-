<?php

use Illuminate\Database\Seeder;

class FarmacoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmacos')-> insert ([
            'nombre' => 'aspirina',
            'precio' => 2000,
            'descripcion' => 'salva de apuros',
            ]);
    }
}
