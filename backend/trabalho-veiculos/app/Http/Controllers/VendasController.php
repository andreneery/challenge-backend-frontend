<?php

namespace App\Http\Controllers;

use App\Models\VendaModel;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index()
    {
        $vendas = VendaModel::all();
        return response()->json($vendas);
    }

    public function create()
    {
        $venda = new VendaModel();
        $venda->veiculo_id = $request->input('veiculo_id');
        $venda->cliente_id = $request->input('cliente_id');
        $venda->valor = $request->input('valor');
        $venda->data_venda = today();

        $venda->save();
        return response()->json($venda);
    }

    public function show(VendaModel $vendaModel)
    {
        //show a venda by id in json format
        $findVenda = VendaModel::find($vendaModel);
        if(!$findVenda){
            return response()->json([
                'message'   => 'Venda não encontrada',
            ], 404);
        }
        return response()->json($findVenda);

    }

    public function update(Request $request, VendaModel $vendaModel)
    {
        //update a venda by id
        $findVenda = VendaModel::find($vendaModel);
        if(!$findVenda){
            return response()->json([
                'message'   => 'Venda não encontrada',
            ], 404);
        } else {
            $findVenda->veiculo_id = $request->input('veiculo_id');
            $findVenda->cliente_id = $request->input('cliente_id');
            $findVenda->valor = $request->input('valor');
            $findVenda->data_venda = today();

            $findVenda->save();

            return response()->json($findVenda);
        }
    }

    public function destroy(VendaModel $vendaModel)
    {
        //delete a venda by id
        $findVenda = VendaModel::find($vendaModel);
        if(!$findVenda){
            return response()->json([
                'message'   => 'Venda não encontrada',
            ], 404);
        } else {
            $findVenda->delete();
            return response()->json([
                'message'   => 'Venda deletada com sucesso',
            ], 200);
        }
    }
}
