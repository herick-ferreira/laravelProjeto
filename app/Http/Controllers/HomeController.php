<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $id = 4;
        $usuario = "Claudio";

        $dados = [
            'id' => $id,
            'usuario' => $usuario
        ];

        return view("home",$dados);
    
    }
}
