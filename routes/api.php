<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Rotas de Categoria
Route::post('/criarCategoria', 'CategoriaController@criarCategoria');
Route::get('/getCategoria/{id}', 'CategoriaMinhaController@getCategoria');
Route::put('/atualizarCategoria/{id}','CategoriaController@atualizarCategoria');
Route::delete('/deletarCategoria/{id}', 'CategoriaController@deletarCategoria');

//Rotas de Produto
Route::post('/criarProduto', 'ProdutoController@criarProduto');
Route::get('/getProduto/{id}', 'ProdutoMinhaController@getProduto');
Route::put('/atualizarProduto/{id}','ProdutoController@atualizarProduto');
Route::delete('/deletarProduto/{id}', 'ProdutoController@deletarProduto');

//Rotas de Cliente
Route::post('/criarCliente', 'ClienteController@criarCliente');
Route::get('/getCliente/{id}', 'ClienteMinhaController@getCliente');
Route::put('/atualizarCliente/{id}','ClienteController@atualizarCliente');
Route::delete('/deletarCliente/{id}', 'ClienteController@deletarCliente');

//Rotas de Pedido
Route::post('/criarPedido', 'PedidoController@criarPedido');
Route::get('/getPedido/{id}', 'PedidoMinhaController@getPedido');
Route::put('/atualizarPedido/{id}','PedidoController@atualizarPedido');
Route::delete('/deletarPedido/{id}', 'PedidoController@deletarPedido');
