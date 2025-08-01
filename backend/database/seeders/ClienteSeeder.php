<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombres' => 'Pedro',
                'apellidos' => 'Sanchez Torres',
                'direccion' => 'Calle M. Angel 123',
                'celular' => '123456789',
                'nit' => '12345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Marcos',
                'apellidos' => 'Paniagua Molina',
                'direccion' => 'Av. Circunvalacion 456',
                'celular' => '73929782',
                'nit' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
