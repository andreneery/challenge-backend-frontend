<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Veiculos;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendasController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//create a route to get all veiculos
Route::get('/veiculo', [Veiculos::class, 'index']);

// create a route to create a new veiculo
Route::post('/veiculo', [Veiculos::class, 'create']);

// create a route to get a veiculo by id
Route::get('/veiculo/{id}', [Veiculos::class, 'show']);

// create a route to update a veiculo by id
Route::put('/veiculos/{id}', [Veiculos::class, 'update']);

//create a route to delete a veiculo by id
Route::delete('/veiculos/{id}', [Veiculos::class, 'destroy']);



