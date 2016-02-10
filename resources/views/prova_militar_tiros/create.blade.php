<?php
use App\User;
?>

@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
  <h1><i class="glyphicon glyphicon-plus"></i> Criar Prova Tiro Militar </h1>
  </div>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">
    <div class="col-md-12"> 
      <form action="{{ route('prova_militar_tiros.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" id="entidade_id-field" name="entidade_id" value="{{ $entidade_id }}">

         <label for="dataProva-field">Data Prova</label>
         <input type="date" id="dataProva-field" name="dataProva" class="form-control" value="{{ old("dataprova") }}"/>

       <div class="form-group @if($errors->has('local')) has-error @endif">
         <label for="local-field">Local</label>
         <input type="text" id="local-field" name="local" class="form-control" value="{{ old("local") }}"/>
         @if($errors->has("local"))
         <span class="help-block">{{ $errors->first("local") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('tipo')) has-error @endif">
         <label for="tipo-field">Tipo</label>
         <input type="text" id="tipo-field" name="tipo" class="form-control" value="{{ old("tipo") }}"/>
         @if($errors->has("tipo"))
         <span class="help-block">{{ $errors->first("tipo") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('notaFinal')) has-error @endif">
         <label for="notaFinal-field">Nota Final</label>
         <input type="text" id="notaFinal-field" name="notaFinal" class="form-control" value="{{ old("notaFinal") }}"/>
         @if($errors->has("notaFinal"))
         <span class="help-block">{{ $errors->first("notaFinal") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('arquivo')) has-error @endif">
         <label for="arquivo-field">Arquivo</label>
         <input type="text" id="arquivo-field" name="arquivo" class="form-control" value="{{ old("arquivo") }}"/>
         @if($errors->has("arquivo"))
         <span class="help-block">{{ $errors->first("arquivo") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('observacoes')) has-error @endif">
         <label for="observacoes-field">Observações</label>
         <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ old("observacoes") }}</textarea>
         @if($errors->has("observacoes"))
         <span class="help-block">{{ $errors->first("observacoes") }}</span>
         @endif
       </div>
       <div class="well well-sm">
        <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
          <button type="submit" class="btn btn-primary">Criar</button>
        <?php }?>
        <a class="btn btn-link pull-right" href="{{ route('prova_militar_tiros.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
      </div>
    </form>

  </div>
</div>
</div>
@endsection