<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'id' => '1',
            'nombreMateria' => 'matematicas',
            'intensidad' => '60 Horas'
        ]);
        Materia::create([
            'id' => '2',
            'nombreMateria' => 'Español',
            'intensidad' => '60 Horas'
        ]);
        Materia::create([
            'id' => '3',
            'nombreMateria' => 'laravel',
            'intensidad' => '80 Horas'
        ]);
        Materia::create([
            'id' => '4',
            'nombreMateria' => 'ingles',
            'intensidad' => '3450 Horas'
        ]);
    }
}
