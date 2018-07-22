<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
  public function criarProduto(Request $request) {
    $novoProduto = new produto;

    $novoProduto->codigo = $request->codigo;
    $novoProduto->nome = $request->nome;
    $novoProduto->preco = $request->preco;
    $novoProduto->categoria_produto = $request->categoria_produto;

    $novoProduto->save();
  }
  public function getProduto($id) {
    $produto = produto::findorfail($id);

    return response()->json([$produto]);
  }
  public function atualizarProduto(Request $request, $id){
    $produto = produto::findorfail($id);

    if($request->codigo){
      $produto->codigo = $request->codigo;
    }
    if($request->nome){
      $produto->nome = $request->nome;
    }
    if($request->preco){
      $produto->preco = $request->preco;
    }
    if($request->categoria_produto){
      $produto->categoria_produto = $request->categoria_produto;
    }

    $produto->save();
  }
  public function deletarProduto($id){
    produto::destroy($id);
  }
}
