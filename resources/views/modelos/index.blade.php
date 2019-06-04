@extends('layout.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">    
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('modelos.create') }}"> Criar Produto</a>
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
            <th>SKU</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($modelos as $modelo)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $modelo-> SKU }}</td>
            <td>{{ $modelo-> Nome }}</td>
            <td>{{ $modelo-> Descrição }}</td>
            <td>{{ $modelo-> Preço }}</td>
            <td>
                <form action="{{ route('modelos.destroy',$modelo-> id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('modelos.show',$modelo-> id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('modelos.edit',$modelo-> id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  </div>
    {!! $modelos->links() !!}

