@extends('layout.app')

@section('content')
<table class="table table-striped table-bordered table-condensed table-hover">
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Visualização do Produto</h2>
            </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('modelos.index') }}"> Voltar</a>
        </div>
    </div>
</div></br>
   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>SKU:</strong> {{ $modelo-> SKU }}</h4>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Nome:</strong> {{ $modelo-> Nome }}</h4>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Descrição:</strong> {{ $modelo-> Descrição }}</h4>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Preço:</strong> {{ $modelo-> Preço }}</h4>
            </div>
        </div>
        </div>
    </div>
</div>
</table>
@endsection