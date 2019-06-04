@extends('layout.app')
  
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Novo Produto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('modelos.index') }}"> Voltar</a>
        </div>
    </div>
</div></br>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Tente novamente!<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('modelos.store') }}" method="POST">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SKU:</strong>
                <input type="text" name="SKU" class="form-control" placeholder="Ex.: Model1234">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="Nome" class="form-control" placeholder="Nome do Produto">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <textarea class="form-control" style="height:150px" name="Descrição" placeholder="Detalhes do Produto"></textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preço:</strong>
                <input type="text" name="Preço" class="form-control" placeholder="Não ultilize vírgulas!">
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </div>
   </div>
</form>
@endsection