@extends('layout')
 
@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-edit"></i> Editar Militar #{{$militar->num_mecanografico}} {{$militar->nome}}</h1>
  </div>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">

    <form action="{{ route('militars.update', $militar->id) }}" method="POST">
      <div class="col-md-12">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group @if($errors->has('num_mecanografico')) has-error @endif">
         <label for="num_mecanografico-field">Num_mecanografico</label>
         <input type="text" id="num_mecanografico-field" name="num_mecanografico" class="form-control" value="{{ $militar->num_mecanografico }}"/>
         @if($errors->has("num_mecanografico"))
         <span class="help-block">{{ $errors->first("num_mecanografico") }}</span>
         @endif
       </div> 
       <div class="form-group @if($errors->has('nomeProprio')) has-error @endif">
         <label for="nomeProprio-field">Num_mecanografico</label>
         <input type="text" id="nomeProprio-field" name="nomeProprio" class="form-control" value="{{ $militar->nomeProprio }}"/>
         @if($errors->has("nomeProprio"))
         <span class="help-block">{{ $errors->first("nomeProprio") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('apelido')) has-error @endif">
         <label for="apelido-field">Apelido</label>
         <input type="text" id="apelido-field" name="apelido" class="form-control" value="{{ $militar->apelido }}"/>
         @if($errors->has("apelido"))
         <span class="help-block">{{ $errors->first("apelido") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('posto_id')) has-error @endif">
         <label for="posto_id-field">Posto</label>
         <input type="text" id="posto_id-field" name="posto_id" class="form-control" value="{{ $militar->posto_id }}"/>
         @if($errors->has("posto_id"))
         <span class="help-block">{{ $errors->first("posto_id") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
         <label for="data_nascim-field">Data de Nascimento</label>
         <input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ $militar->data_nascim }}"/>
         @if($errors->has("data_nascim"))
         <span class="help-block">{{ $errors->first("data_nascim") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('grupo_sang')) has-error @endif">
         <label for="grupo_sang-field">Grupo Sanguineo</label>
         <input type="text" id="grupo_sang-field" name="grupo_sang" class="form-control" value="{{ $militar->grupo_sang }}"/>
         @if($errors->has("grupo_sang"))
         <span class="help-block">{{ $errors->first("grupo_sang") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('sexo')) has-error @endif">
         <label for="sexo-field">Sexo</label>
         <input type="text" id="sexo-field" name="sexo" class="form-control" value="{{ $militar->sexo }}"/>
         @if($errors->has("sexo"))
         <span class="help-block">{{ $errors->first("sexo") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('unidade_id')) has-error @endif">
         <label for="unidade_id-field">Unidade</label>
         <input type="text" id="unidade_id-field" name="unidade_id" class="form-control" value="{{ $militar->unidade_id }}"/>
         @if($errors->has("unidade_id"))
         <span class="help-block">{{ $errors->first("unidade_id") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('inativo')) has-error @endif">
         <label for="inativo-field">Inativo</label>
         <input type="text" id="sexo-field" name="inativo" class="form-control" value="{{ $militar->inativo }}"/>
         @if($errors->has("inativo"))
         <span class="help-block">{{ $errors->first("inativo") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
         <label for="data_inativo-field">Data de Inativação</label>
         <input type="text" id="data_inativo-field" name="data_inativo" class="form-control" value="{{ $militar->data_inativo }}"/>
         @if($errors->has("data_inativo"))
         <span class="help-block">{{ $errors->first("data_inativo") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('data_ativo')) has-error @endif">
        <label for="data_ativo-field">Data de Ativação</label>
        <input type="text" id="data_ativo-field" name="data_ativo" class="form-control" value="{{ $militar->data_ativo }}"/>
        @if($errors->has("data_ativo"))
        <span class="help-block">{{ $errors->first("data_ativo") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('fotografia')) has-error @endif">
        <label for="fotografia-field">Fotografia</label>
        <input type="text" id="fotografia-field" name="fotografia" class="form-control" value="{{ $militar->fotografia }}"/>
        @if($errors->has("fotografia"))
        <span class="help-block">{{ $errors->first("fotografia") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('tamanhoimagem')) has-error @endif">
        <label for="tamanhoimagem-field">TamanhoImagem</label>
        <input type="text" id="tamanhoimagem-field" name="tamanhoimagem" class="form-control" value="{{ $militar->tamanhoimagem  }}"/>
        @if($errors->has("tamanhoimagem"))
        <span class="help-block">{{ $errors->first("tamanhoimagem") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('tipoimagem')) has-error @endif">
        <label for="tipoimagem-field">TipoImagem</label>
        <input type="text" id="tipoimagem-field" name="tipoimagem" class="form-control" value="{{$militar->tipoimagem  }}"/>
        @if($errors->has("tipoimagem"))
        <span class="help-block">{{ $errors->first("tipoimagem") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
        <label for="motivo_inativo-field">Motivo de Inativação</label>
        <input type="text" id="motivo_inativo-field" name="motivo_inativo" class="form-control" value="{{ $militar->motivo_inativo  }}"/>
        @if($errors->has("motivo_inativo"))
        <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('observacoes')) has-error @endif">
        <label for="observacoes-field">Observacoes</label>
        <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $militar->observacoes  }}</textarea>
        @if($errors->has("observacoes"))
        <span class="help-block">{{ $errors->first("observacoes") }}</span>
        @endif
      </div>
      <div class="well well-sm">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-link pull-right" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
      </div>
    </div>
  </form>

</div>
</div>

@endsection 
