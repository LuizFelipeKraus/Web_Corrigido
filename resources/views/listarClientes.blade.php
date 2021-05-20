@extends('layouts.app')
@routes
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            
        </div>
        
        <div class="col-md-8">

            <h1 class="text-center">Lista de Clientes</h1>


            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($clientes))
                    @foreach($clientes as $us)
                    <tr>
                        <td>{{$us->nome}}</td>
                        <td>{{$us->endereco}}</td>
                        <td>{{$us->cep}}</td>
                        <td>{{$us->cidade}}</td>
                        <td>{{$us->estado}}</td>
                        <td>
                            <a href="{{route('view_editar_cliente', ['id' => $us->id])}}" class="btn btn-warning">Alterar</a>
                        </td>
                        <td>
                            <a href="#" onclick="excluir({{ $us->id }})" class="btn btn-danger" >Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif

                </tbody>

            </table>
            <h2 class="text-center">Compras no Sistemas</h2>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome do Cliente</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Data da Compra</th>                     
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($compras))
                    @foreach($compras as $com)
                    <tr>
                        <td>{{$com->id}}</td>
                        <td>{{$com->clientes->nome}}</td>
                        <td>R$:{{$com->valor}}</td>
                        <td>{{$com->data_atual}}</td>
                        
                    </tr>
                    @endforeach
                    @endif
                    
                </tbody>

            </table>

        </div>
        <div class="col-md-2">
            
        </div>
    </div>
</div>
<script>
  function excluir(id){
    if(confirm("Voce deseja realmente excluir o usuaário id :" + id + "?" )){
      location.href = route('excluir_cliente', {id : id});
    }   

  }
</script>
@endsection