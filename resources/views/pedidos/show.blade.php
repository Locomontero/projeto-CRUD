@extends('layout.app')

@section('content')
<table class="table table-striped table-bordered table-condensed table-hover">
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Visualização do Pedido</h2>
            </div>
        <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Voltar</a>
        </div>
    </div>
</div></br>
   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Total:</strong> {{ $pedido-> Total }}</h4>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Data:</strong> {{ $pedido-> Data }}</h4>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Produtos:</strong> {{ $pedido-> Produtos }}</h4>
            </div>
        </div>
        </div>
    </div>
</div>
</table>
@endsection