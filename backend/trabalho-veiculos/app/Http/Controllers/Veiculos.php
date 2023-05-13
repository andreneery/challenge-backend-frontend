<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class Veiculos extends Controller
{

    public function index()
    {
        $veiculos = Veiculo::all();
        
        return response()->json($veiculos);
    }

    public function create(Request $request)
    {
        $veiculo = new Veiculo();
        $veiculo->modelo = $request->input('modelo');
        $veiculo->marca = $request->input('marca');
        $veiculo->ano = $request->input('ano');
        $veiculo->placa = $request->input('placa');
        $veiculo->cor = $request->input('cor');
        $veiculo->km = $request->input('km');

        $veiculo->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
