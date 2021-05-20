@extends('layouts.app')

@section('content')
<h1 class="text-center">Home de Cadastro de Cliente</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            
        </div>
    
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center">
                    Cadastrar novo Cliente
                </div>
                <div class="card-body">
                    <h5 class="card-title">Efetuar novo Cadastro</h5>
                    <a href="{{route('view_cadastrar_cliente')}}" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center">
                    Lista de Clientes
                </div>
                <div class="card-body">
                    <h5 class="card-title">Mostra todos os clientes</h5>
                    <a href="{{route('lista_cliente')}}" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center">
                    Iniciar uma nova venda
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cadastrar uma nova compra</h5>
                    
                    <a href="{{route('view_cadastrar_compra')}}" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            
        </div>

    </div>
</div>
@endsection
