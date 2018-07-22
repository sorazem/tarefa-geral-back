<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
  public function criarPedido(Request $request) {
    $novoPedido = new pedido;

    $novoPedido->numero = $request->numero;
    $novoPedido->data = $request->data;
    $novoPedido->quantidade_produto = $request->quantidade_produto;
    $novoPedido->id_produto = $request->id_produto;

    $novoPedido->save();
  }
  public function getPedido($id) {
    $pedido = pedido::findorfail($id);

    return response()->json([$pedido]);
  }
  public function atualizarPedido(Request $request, $id){
    $pedido = pedido::findorfail($id);

    if($request->numero){
      $pedido->numero = $request->numero;
    }
    if($request->data){
      $pedido->data = $request->data;
    }
    if($request->quantidade_produto){
      $pedido->quantidade_produto = $request->quantidade_produto;
    }
    if($request->id_produto){
      $pedido->id_produto = $request->id_produto;
    }

    $pedido->save();
  }
  public function deletarPedido($id){
    pedido::destroy($id);
  }
}
