<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;

class ComprasController extends Controller
{
    function viewCadastrarCompra(){
        $clientes =  Cliente::all();
        return view('cadastroCompra',[
            'clientes' => $clientes
        ]);
    }

    function cadastrarCompra(Request $req){
        $u = new Compra();
		
		$u->valor = $req->input('valor');
        $u->data_atual = $req->input('data');
		$u->id_clientes = $req->input('id_cliente');
		
		$u->save();
		return redirect()->route('home');
    }
}
