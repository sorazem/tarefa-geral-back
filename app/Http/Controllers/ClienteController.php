<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
  public function criarCliente(Request $request) {
    $novoCliente = new cliente;

    $novoCliente->codigo = $request->codigo;
    $novoCliente->nome = $request->nome;
    $novoCliente->endereco = $request->endereco;
    $novoCliente->telefone = $request->telefone;
    $novoCliente->limite = $request->limite;

    if($request->status){
      $novoCliente->status = $request->status;
    }

    $novoCliente->save();
  }
  public function getCliente($id) {
    $cliente = cliente::findorfail($id);

    return response()->json([$cliente]);
  }
  public function atualizarCliente(Request $request, $id){
    $cliente = cliente::findorfail($id);

    if($request->codigo){
      $cliente->codigo = $request->codigo;
    }
    if($request->nome){
      $cliente->nome = $request->nome;
    }
    if($request->endereco){
      $cliente->endereco = $request->endereco;
    }
    if($request->telefone){
      $cliente->telefone = $request->telefone;
    }
    if($request->status){
      $cliente->status = $request->status;
    }
    if($request->limite){
      $cliente->limite = $request->limite;
    }

    $cliente->save();
  }
  public function deletarCliente($id){
    cliente::destroy($id);
  }
}
