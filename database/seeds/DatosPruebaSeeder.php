<?php

use Illuminate\Database\Seeder;

class DatosPruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autores')->insert([
            'apellidos' => Str::random(10),
            'nombre' => Str::random(10),
            'nacionalidad' => Str::random(10),
            'sexo' => "H",
            'edad' => rand(18, 99),
        ]);
    }
}
