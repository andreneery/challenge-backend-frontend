<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Veiculos;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendasController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// create a route to register a user
Route::post('/register', 'App\Http\Controllers\AuthController@register');

// create a route to login a user
Route::post('/login', 'App\Http\Controllers\AuthController@login');

// create a route to logout a user
Route::post('/logout', 'App\Http\Controllers\AuthController@logout');

// create a route to get the authenticated user
Route::get('/user', 'App\Http\Controllers\AuthController@user');



//create a route to get all veiculos
Route::get('/veiculos', 'App\Http\Controllers\Veiculos@index');


// create a route to create a new veiculo
Route::post('/veiculos', 'App\Http\Controllers\Veiculos@create');

// create a route to get a veiculo by id
Route::get('/veiculos/{id}', 'App\Http\Controllers\Veiculos@show');

// create a route to update a veiculo by id
Route::put('/veiculos/{id}', 'App\Http\Controllers\Veiculos@update');


//create a route to delete a veiculo by id
Route::delete('/veiculos/{id}', 'App\Http\Controllers\Veiculos@delete');


//create a route to get all clientes
Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');

// create a route to create a new cliente
Route::post('/clientes', 'App\Http\Controllers\ClienteController@create');

// create a route to get a cliente by id
Route::get('/clientes/{id}', 'App\Http\Controllers\ClienteController@show');

// create a route to update a cliente by id
Route::put('/clientes/{id}', 'App\Http\Controllers\ClienteController@update');

//create a route to delete a cliente by id
Route::delete('/clientes/{id}', 'App\Http\Controllers\ClienteController@delete');

//create a route to get all vendas
Route::get('/vendas', 'App\Http\Controllers\VendasController@index');

// create a route to create a new venda
Route::post('/vendas', 'App\Http\Controllers\VendasController@create');

// create a route to get a venda by id
Route::get('/vendas/{id}', 'App\Http\Controllers\VendasController@show');

// create a route to update a venda by id
Route::put('/vendas/{id}', 'App\Http\Controllers\VendasController@update');

//create a route to delete a venda by id
Route::delete('/vendas/{id}', 'App\Http\Controllers\VendasController@delete');

