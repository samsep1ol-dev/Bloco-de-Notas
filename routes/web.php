<?php

//usar o modulo roto
use Illuminate\Support\Facades\Route;

// onde é definido a rota
Route::get('/', function () {
    return view('welcome');
});


//minha rota fds
Route::get('/b', function(){
    echo 'random';
});