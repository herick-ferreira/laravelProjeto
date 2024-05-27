<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(Request $request) {
        $dados = $request-> all();
        $array = ["cliente"=>"", "email"=>""];


        if ($dados){

            $cliente = $dados['cliente'];
            $email = $dados['email'];
            $array = ["cliente"=>$cliente, "email"=>$email];

        }
        
        return view('clientes', $array);
    }
}
