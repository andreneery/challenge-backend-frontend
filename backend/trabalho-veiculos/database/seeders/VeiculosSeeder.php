<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Veiculo;

class VeiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create seeders for veiculos migration

        Veiculo::create([
            'modelo' => 'Fusca',
            'marca' => 'Volkswagen',
            'ano' => '1970',
            'placa' => 'ABC-1234',
            'cor' => 'Azul',
            'km' => '100000',
        ]);
        Veiculo::create([
            'modelo' => 'Gol',
            'marca' => 'Volkswagen',
            'ano' => '2010',
            'placa' => 'DEF-5678',
            'cor' => 'Preto',
            'km' => '50000',
        ]);
        Veiculo::create([
            'modelo' => 'Uno',
            'marca' => 'Fiat',
            'ano' => '2015',
            'placa' => 'GHI-9012',
            'cor' => 'Branco',
            'km' => '20000',
        ]);
        Veiculo::create([
            'modelo' => 'Celta',
            'marca' => 'Chevrolet',
            'ano' => '2018',
            'placa' => 'JKL-3456',
            'cor' => 'Vermelho',
            'km' => '10000',
        ]);
        Veiculo::create([
            'modelo' => 'Civic',
            'marca' => 'Honda',
            'ano' => '2020',
            'placa' => 'MNO-7890',
            'cor' => 'Prata',
            'km' => '1000',
        ]);
        Veiculo::create([
            'modelo' => 'Corolla',
            'marca' => 'Toyota',
            'ano' => '2021',
            'placa' => 'PQR-1234',
            'cor' => 'Preto',
            'km' => '100',
        ]);
        Veiculo::create([
            'modelo' => 'Cruze',
            'marca' => 'Chevrolet',
            'ano' => '2019',
            'placa' => 'STU-5678',
            'cor' => 'Branco',
            'km' => '10000',
        ]);
        Veiculo::create([
            'modelo' => 'Fiesta',
            'marca' => 'Ford',
            'ano' => '2017',
            'placa' => 'VWX-9012',
            'cor' => 'Azul',
            'km' => '20000',
        ]);
    }
}