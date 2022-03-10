<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
            'nombre' =>'primer_libro',
            'tel' => '999999999',
            'num_libros' => 50,
        ]);
        DB::table('contactos')->insert([
            'nombre' =>'segundo_libro',
            'tel' => '888888888',
            'num_libros' => 40,
        ]);
        DB::table('contactos')->insert([
            'nombre' =>'tercer_libro',
            'tel' => '777777777',
            'num_libros' => 30,
        ]);
    }
}
