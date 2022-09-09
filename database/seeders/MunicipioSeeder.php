<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create([
            'id' => 1,
            'nombreMunici' => 'Pereira',
            'idDep' => '1'
        ]);
        Municipio::create([
            'id' => 2,
            'nombreMunici' => 'Dosquebradas',
            'idDep' => '1'
        ]);
        Municipio::create([
            'id' => 3,
            'nombreMunici' => 'santa rosa',
            'idDep' => '1'
        ]);
        Municipio::create([
            'id' => 4,
            'nombreMunici' => 'itagui',
            'idDep' => '2'
        ]);
        Municipio::create([
            'id' => 5,
            'nombreMunici' => 'Envigado',
            'idDep' => '2'
        ]);
        Municipio::create([
            'id' => 6,
            'nombreMunici' => 'cuenca',
            'idDep' => '3'
        ]);
        Municipio::create([
            'id' => 7,
            'nombreMunici' => 'madrid',
            'idDep' => '3'
        ]);
        Municipio::create([
            'id' => 8,
            'nombreMunici' => 'murcia',
            'idDep' => '4'
        ]);
        Municipio::create([
            'id' => 9,
            'nombreMunici' => 'Granada',
            'idDep' => '4'
        ]);
        Municipio::create([
            'id' => 10,
            'nombreMunici' => 'Oslo',
            'idDep' => '5'
        ]);
        Municipio::create([
            'id' => 11,
            'nombreMunici' => 'punta',
            'idDep' => '6'
        ]);
        Municipio::create([
            'id' => 12,
            'nombreMunici' => 'riola',
            'idDep' => '7'
        ]);

    }
}
