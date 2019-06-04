@extends('layout.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Pedido</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('modelos.index') }}">Voltar</a>
            </div>
        </div>
    </div></br>
 
    <form action="{{ route('modelos.update',$modelo-> id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>SKU:</strong>
                    <input type="text" name="SKU" value="{{ $modelo-> SKU }}" class="form-control" placeholder="SKU">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="Nome" value="{{ $modelo-> Nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="text" name="Descrição" value="{{ $modelo-> Descrição }}" class="form-control" placeholder="Descrição">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="text" name="Preço" value="{{ $modelo-> Preço }}" class="form-control" placeholder="Preço">
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