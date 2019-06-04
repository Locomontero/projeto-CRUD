@extends('layout.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">    
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('pedidos.create') }}"> Criar Pedido</a>
            </div>
        </div>
    </div></br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table ">
        <tr>
            <th>ID</th>
            <th>Total</th>
            <th>Data</th>
            <th>Produtos</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pedido-> Total }}</td>
            <td>{{ $pedido-> Data }}</td>
            <td>{{ $pedido-> Produtos }}</td>
            <td>
                <form action="{{ route('pedidos.destroy',$pedido-> id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pedidos.show',$pedido-> id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('pedidos.edit',$pedido-> id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  </div>
    {!! $pedidos->links() !!}

