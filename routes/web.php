<?php

//usar o modulo roto

use App\Http\Controllers\ControladorGeral;
use Illuminate\Support\Facades\Route;

// onde é definido a rota
Route::get('/', function () {
    return view('welcome');
});


//minha rota fds
Route::get('/b', function(){
    echo 'rantestedom';
});


//rota que envia para um metodo de controlador
//controladorgeral?class=index (exemplo feio)
//ControladorGeral é a classe
//parametro 'class' é onde eu vou indicar o metodo
//class é a view

Route::get('controlador', [ControladorGeral::class, 'index']);
