<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Calzado de varon',
                'descripcion' => 'Categoría dedicada a calzado masculino de alta calidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Calzado de dama',
                'descripcion' => 'Categoría dedicada a calzado femenino elegante y cómodo',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

