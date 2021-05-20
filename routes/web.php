<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\HomeController;
use App\Models\Cliente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/lista',[ClienteController::class, 'listaCliente'])->name('lista_cliente');
    Route::get('/lista_clientes',[ClienteController::class, 'viewListarClientes'])->name('view_lista_cliente');
    Route::post('/adicionar_cliente',[ClienteController::class, 'adicionarNovoCliente'])->name('cadastrar_cliente');
    Route::get('/cadastrar_clientes',[ClienteController::class, 'viewCadastrarCliente'])->name('view_cadastrar_cliente');
    Route::get('/editar/{id}', [ClienteController::class, 'viewEditarCliente'])->name('view_editar_cliente');
    Route::post('/alterar/{id}', [ClienteController::class, 'editarCliente'])->name('editar_cliente');
    Route::get('/excluir/{id}', [ClienteController::class, 'excluirCliente'])->name('excluir_cliente');
    Route::get('/cadastrar_compra',[ComprasController::class, 'viewCadastrarCompra'])->name('view_cadastrar_compra');
    Route::post('/adicionar_compra', [ComprasController::class, 'cadastrarCompra'])->name('cadastrar_compra');
});