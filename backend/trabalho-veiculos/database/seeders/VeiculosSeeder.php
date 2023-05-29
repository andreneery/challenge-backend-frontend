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

        Veiculo::firstOrCreate([
            'modelo' => 'Fusca',
            'marca' => 'Volkswagen',
            'ano' => '1970',
            'placa' => 'ABC-1234',
            'cor' => 'Azul',
            'km' => '100000',
            'renavam' => '123456789',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '123456789',
            'valor' => '10000',
            'comentario' => 'Carro antigo',
        ]);
        Veiculo::firstOrCreate([
            'modelo' => 'Gol',
            'marca' => 'Volkswagen',
            'ano' => '2010',
            'placa' => 'DEF-5678',
            'cor' => 'Preto',
            'km' => '50000',
            'renavam' => '987654321',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '987654321',
            'valor' => '20000',
            'comentario' => 'Carro novo',
        ]);
        Veiculo::firstOrCreate([
            'modelo' => 'Uno',
            'marca' => 'Fiat',
            'ano' => '2015',
            'placa' => 'GHI-9012',
            'cor' => 'Branco',
            'km' => '20000',
            'renavam' => '123456789',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '123456789',
            'valor' => '30000',
            'comentario' => 'Carro novo',
        ]);
        Veiculo::firstOrCreate([
            'modelo' => 'Celta',
            'marca' => 'Chevrolet',
            'ano' => '2018',
            'placa' => 'JKL-3456',
            'cor' => 'Vermelho',
            'km' => '10000',
            'renavam' => '987654321',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '987654321',
            'valor' => '40000',
            'comentario' => 'Carro novo',
        ]);
        Veiculo::firstOrCreate([
            'modelo' => 'Civic',
            'marca' => 'Honda',
            'ano' => '2020',
            'placa' => 'MNO-7890',
            'cor' => 'Prata',
            'km' => '1000',
            'renavam' => '123456789',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '123456789',
            'valor' => '50000',
            'comentario' => 'Carro novo',
        ]);
        Veiculo::firstOrCreate([
            'modelo' => 'Corolla',
            'marca' => 'Toyota',
            'ano' => '2021',
            'placa' => 'PQR-1234',
            'cor' => 'Preto',
            'km' => '100',
            'renavam' => '987654321',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '987654321',
            'valor' => '60000',
            'comentario' => 'Carro novo',
        ]);
        Veiculo::firstOrCreate([
            'modelo' => 'Cruze',
            'marca' => 'Chevrolet',
            'ano' => '2019',
            'placa' => 'STU-5678',
            'cor' => 'Branco',
            'km' => '10000',
            'renavam' => '123456789',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '123456789',
            'valor' => '70000',
            'comentario' => 'Carro novo',
        ]);
        Veiculo::firstOrCreate([
            'modelo' => 'Fiesta',
            'marca' => 'Ford',
            'ano' => '2017',
            'placa' => 'VWX-9012',
            'cor' => 'Azul',
            'km' => '20000',
            'renavam' => '987654321',
            'tipo' => 'Carro',
            'combustivel' => 'Gasolina',
            'chassis' => '987654321',
            'valor' => '80000',
            'comentario' => 'Carro novo',
        ]);
    }
}