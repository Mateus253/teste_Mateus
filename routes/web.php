<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar', function (Illuminate\Http\Request $request) {
    $produtos = new App\Models\Produtos();
    $produtos -> codigo = $request -> get('codigo');
    $produtos -> nome = $request -> get('nome');
    $produtos -> categoria = $request -> get('categoria');
    $produtos -> preco = $request -> get('preco');
    $produtos -> descricao = $request -> get('descricao');

    $produtos -> save();
    echo "Sua mensagem foi armazenada com sucesso! Codigo: " .$produtos->codigo;
});

Route::get('/lista', function () {
    return view('lista', array('produtos' => App\Models\Produtos::all()));
});