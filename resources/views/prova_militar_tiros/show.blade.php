@extends('layout')
@section('header')
<div class="col-md-12">
<div class="page-header">
        <h1>Ver Prova Tiro Militar #<a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></h1>
        <form action="{{ route('prova_militar_tiros.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('editarProva', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
            <form action="#">
                <div class="form-group">
                     <label for="dataProva">DATA PROVA</label>
                     <p class="form-control-static">{{$prova->dataProva}}</p>
                </div>
                <div class="form-group">
                     <label for="local">LOCAL</label>
                     <p class="form-control-static">{{$prova->local}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipo">TIPO</label>
                     <p class="form-control-static">{{$prova->tipo}}</p>
                </div> 
                    <div class="form-group">
                     <label for="notaFinal">NOTA FINAL</label>
                     <p class="form-control-static">{{$prova->notaFinal}}</p>
                </div>
                  <div class="form-group">
                     <label for="arquivo">ARQUIVO</label>
                     <p class="form-control-static">{{$prova->arquivo}}</p>
                </div>
                 <div class="form-group">
                     <label for="observacoes">OBSERVAÇÕES</label>
                     <p class="form-control-static">{{$prova->observacoes}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_militar_tiros.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
            </div>
        </div>
    </div>

@endsection