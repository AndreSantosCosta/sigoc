<?php
use App\User;
?>

@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Editar Prova Tiro Militar #<a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></h1>
    </div>
    </div>
@endsection

@section('content')
    @include('error')
 
    <div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
  
            <form action="{{ route('prova_militar_tiros.update', $prova->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
               

                <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ $prova->local }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dataProva')) has-error @endif">
                       <label for="dataProva-field">Data de Prova</label>
                    <input type="date" id="dataProva-field" name="dataProva" class="form-control" value="{{ $prova->dataProva }}"/>
                       @if($errors->has("dataProva"))
                        <span class="help-block">{{ $errors->first("dataProva") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('tipo')) has-error @endif">
                       <label for="tipo-field">Tipo</label>
                    <input type="text" id="tipo-field" name="tipo" class="form-control" value="{{ $prova->tipo }}"/>
                       @if($errors->has("tipo"))
                        <span class="help-block">{{ $errors->first("tipo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notaFinal')) has-error @endif">
                       <label for="notaFinal-field">Nota Final</label>
                    <input type="text" id="notaFinal-field" name="notaFinal" class="form-control" value="{{ $prova->notaFinal }}"/>
                       @if($errors->has("notaFinal"))
                        <span class="help-block">{{ $errors->first("notaFinal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <input type="text" id="arquivo-field" name="arquivo" class="form-control" value="{{ $prova->arquivo }}"/>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observacoes</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $prova->observacoes }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                  <?php if (User::tipoUserLogado()=='A') {?>
                    <button type="submit" class="btn btn-primary" href="{{ route('provasPorEntidade', array('tipoEntidade'=>'M', 'entidade_id'=>$prova->entidade_id)) }}">Guardar</button>
                  <?php }?>  
                    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
                </div>
            </form>

        </div>
    </div>
  </div>
@endsection