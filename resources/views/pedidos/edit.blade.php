@extends('layout.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Pedido</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}">Voltar</a>
            </div>
        </div>
    </div></br>

    <form action="{{ route('pedidos.update',$pedido-> id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total:</strong>
                    <input type="text" name="Total" value="{{ $pedido-> Total }}" class="form-control" placeholder="Total">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data:</strong>
                    <input type="text" name="Data" value="{{ $pedido-> Data }}" class="form-control" placeholder="Data">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Produtos:</strong>
                    <input type="text" name="Produtos" value="{{ $pedido-> Produtos }}" class="form-control" placeholder="Produtos">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </div>
   
    </form>
</div>
</div>
@endsection