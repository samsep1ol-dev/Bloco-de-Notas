<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
                       //extensão do controller.php
class ControladorGeral extends Controller
{
    public function index(){
        // é retornado o arquivo view do controlador.blade.php
        return view('controlador');
    }
}
