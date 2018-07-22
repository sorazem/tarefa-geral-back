<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;

class CategoriaController extends Controller
{
  public function criarCategoria(Request $request) {
    $novoCategoria = new categoria;

    $novoCategoria->codigo = $request->codigo;
    $novoCategoria->nome = $request->nome;

    $novoCategoria->save();
  }
  public function getCategoria($id) {
    $categoria = categoria::findorfail($id);

    return response()->json([$categoria]);
  }
  public function atualizarCategoria(Request $request, $id){
    $categoria = categoria::findorfail($id);
    
    if($request->codigo){
      $categoria->codigo = $request->codigo;
    }
    if($request->nome){
      $categoria->nome = $request->nome;
    }

    $categoria->save();
  }
  public function deletarCategoria($id){
    categoria::destroy($id);
  }
}
