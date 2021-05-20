<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;

class ClienteController extends Controller
{
    function listaCliente(){
        $clientes = Cliente::all();
        $compras = Compra::all();
		return view('listarClientes', [
			'clientes' => $clientes,
            'compras' => $compras
		]);
    }

    function viewListarClientes(){
        return view('listarClientes');
    }

    function adicionarNovoCliente(Request $req) {
        $u = new Cliente();
        $u->nome = $req->input('nome');
        $u->endereco = $req->input('endereco');
        $u->cep = $req->input('cep');
        $u->cidade = $req->input('cidade');
        $u->estado = $req->input('estado');
        $u->save();       
        return redirect()->route('home');
    }
    function viewCadastrarCliente(){
        return view('cadastrarCliente');
    }
    function viewEditarCliente($id){
		$clientes = Cliente::findOrFail($id);
		return view('editarCliente', [
			'clientesEditar' => $clientes
		]);
	}
    function  editarCliente(Request $req, $id) {
		$u = Cliente::find($id);
		$u->nome = $req->input('nome');
		$u->endereco = $req->input('endereco');
		$u->cep = $req->input('cep');
        $u->cidade = $req->input('cidade');
		$u->estado = $req->input('estado');
		
		$u->save();
		return redirect()->route('home');

	}
    function excluirCliente($id){
		$u  = Cliente::findOrFail($id);
		$u->delete();
		return redirect()->route('home');
	}

}
