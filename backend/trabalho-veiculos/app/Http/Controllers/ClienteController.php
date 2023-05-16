<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        //get all clientes in json format
        $clientes = ClienteModel::all();
        return response()->json($clientes);
    }

    //function to greet a cliente
    public function create()
    {
        //create a new cliente
        $cliente = new ClienteModel();
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->endereco = $request->input('endereco');
        $cliente->telefone = $request->input('telefone');
        $cliente->email = $request->input('email');
        $cliente->cidade = $request->input('cidade');
        $cliente->estado = $request->input('estado');
        $cliente->cep = $request->input('cep');

        $cliente->save();

        return response()->json($cliente);
    }


    public function show(ClienteModel $clienteModel)
    {
        //show a cliente by id in json format
        $findCliente = ClienteModel::find($clienteModel);
        if(!$findCliente){
            return response()->json([
                'message'   => 'Cliente não encontrado',
            ], 404);
        }
        return response()->json($findCliente);
    }

    public function update(Request $request, ClienteModel $clienteModel)
    {
        //update a cliente by id
        $findCliente = ClienteModel::find($clienteModel);
        if(!$findCliente){
            return response()->json([
                'message'   => 'Cliente não encontrado',
            ], 404);
        } else {
            $findCliente->nome = $request->input('nome');
            $findCliente->cpf = $request->input('cpf');
            $findCliente->endereco = $request->input('endereco');
            $findCliente->telefone = $request->input('telefone');
            $findCliente->email = $request->input('email');
            $findCliente->cidade = $request->input('cidade');
            $findCliente->estado = $request->input('estado');
            $findCliente->cep = $request->input('cep');

            $findCliente->save();

            return response()->json($findCliente);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClienteModel $clienteModel)
    {
        //delete a cliente by id
        $findCliente = ClienteModel::find($clienteModel);
        if(!$findCliente){
            return response()->json([
                'message'   => 'Cliente não encontrado',
            ], 404);
        } else {
           $findCliente->delete();
              return response()->json([
                'message'   => 'Cliente deletado com sucesso',
              ], 202);
        }
    }
}
