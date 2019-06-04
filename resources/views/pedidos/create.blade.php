@extends('layout.app')
  
@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-center">
        <div class="pull-left">
            <h2>Criar Pedido</h2>
        </div>
        <div class="pull-center-right">
            <a class="btn btn-primary" href="{{ route('pedidos.index') }}">Voltar</a>
        </div>
    </div>
</div>
<form action="{{ route('pedidos.store') }}" method="POST">
    @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total:</strong>
                <input type="text" name="Total"class="form-control" placeholder="ex">
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                <input type="text" name="Data" class="form-control" placeholder="ex.:ano-mês-dia">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produtos:</strong>
        <textarea class="form-control" style="height:150 px" name="Produtos" placeholder="ex"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>  
</form>
</div>
@endsection