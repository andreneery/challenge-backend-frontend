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
        $veiculo->renavam = $request->input('renavam');
        $veiculo->tipo = $request->input('tipo');
        $veiculo->combustivel = $request->input('combustivel');
        $veiculo->chassis = $request->input('chassis');
        $veiculo->valor = $request->input('valor');
        $veiculo->comentario = $request->input('comentario');

        $veiculo->save();

        return response()->json($veiculo);
    }

    public function show(string $id)
    {
        $veiculo = Veiculo::find($id);
        if(!$veiculo){
            return response()->json([
                'message'   => 'Veiculo não encontrado',
            ], 404);
        }

        return response()->json($veiculo);


    }

    public function update(Request $request, string $id)
    {
        $findVeiculo = Veiculo::find($id);
        if(!$findVeiculo){
            return response()->json([
                'message'   => 'Veiculo não encontrado',
            ], 404);
        } else {
            $findVeiculo->modelo = $request->input('modelo');
            $findVeiculo->marca = $request->input('marca');
            $findVeiculo->ano = $request->input('ano');
            $findVeiculo->placa = $request->input('placa');
            $findVeiculo->cor = $request->input('cor');
            $findVeiculo->km = $request->input('km');
            $findVeiculo->renavam = $request->input('renavam');
            $findVeiculo->tipo = $request->input('tipo');
            $findVeiculo->combustivel = $request->input('combustivel');
            $findVeiculo->chassis = $request->input('chassis');
            $findVeiculo->valor = $request->input('valor');
            $findVeiculo->comentario = $request->input('comentario');

            $findVeiculo->save();
        }

        return response()->json($findVeiculo);
    }

    public function destroy(string $id)
    {
        $findVeiculo = Veiculo::find($id);
        if(!$findVeiculo){
            return response()->json([
                'message'   => 'Veiculo não encontrado',
            ], 404);
        } else {
            $findVeiculo->delete();
        }
    }
}
