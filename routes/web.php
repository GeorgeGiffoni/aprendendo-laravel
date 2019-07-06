<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/nome1231', 'MeuControlador@getNome');

Route::get('/idade', 'MeuControlador@getIdade');

Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::get('/nomes/{id}', 'MeuControlador@getNomeById');

//o resource ja cria os metodos http linkados com os metodos do controlador
Route::resource('/cliente', 'ClienteControlador');

Route::post('/cliente/requisitar', 'ClienteControlador@requisitar');

//seção 6 views daqui pra baixo

Route::get('/primeiraview', function () {
    return view('minhaview');
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome){
    return view('minhaview')
    ->with('nome', $nome)
    ->with('sobrenome', $sobrenome);
});

//usando array de parametro
Route::get('ola/user/{nome}/{sobrenome}', function($nome, $sobrenome){
    $parametros = ['nome'=>$nome, 'sobrenome'=>$sobrenome];
    return view('minhaview', $parametros);
});

//a mais simples de se fazer usando a funcao compact q ele vai pegar todos os parametros e montar um array associativo pra nóis
Route::get('ola/compact/{nome}/{sobrenome}', function ($nome, $sobrenome){
    return view('minhaview', compact('nome', 'sobrenome'));
});
