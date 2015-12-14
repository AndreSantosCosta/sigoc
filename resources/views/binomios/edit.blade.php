@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-edit"></i> Editar Binómio # {{$binomio->militar_id}} _ {{$binomio->cao_id}}</h1>
  </div>
</div>
@endsection

@section('content')

@include('error')

<div class="row">
  <div class="col-md-12">

    <form action="{{ route('binomios.update', $binomio->id) }}" method="POST">
      <div class="col-md-12">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group @if($errors->has('data_inicio')) has-error @endif">
         <label for="data_inicio-field">Num_mecanografico</label>
         <input type="text" id="data_inicio-field" name="data_inicio" class="form-control" value="{{ $binomio->data_inicio }}"/>
         @if($errors->has("data_inicio"))
         <span class="help-block">{{ $errors->first("data_inicio") }}</span>
         @endif
       </div> 
       <div class="form-group @if($errors->has('militar_id')) has-error @endif">
         <label for="militar_id-field">Numero Mecanografico</label>
         <input type="text" id="militar_id-field" name="militar_id" class="form-control" value="{{ $binomio->militar_id }}"/>
         @if($errors->has("militar_id"))
         <span class="help-block">{{ $errors->first("militar_id") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('cao_id')) has-error @endif">
         <label for="cao_id-field">Numero Matricula</label>
         <input type="text" id="cao_id-field" name="cao_id" class="form-control" value="{{ $binomio->cao_id }}"/>
         @if($errors->has("cao_id"))
         <span class="help-block">{{ $errors->first("cao_id") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('vertente')) has-error @endif">
         <label for="vertente-field">Posto</label>
         <input type="text" id="vertente-field" name="vertente" class="form-control" value="{{ $binomio->vertente }}"/>
         @if($errors->has("vertente"))
         <span class="help-block">{{ $errors->first("vertente") }}</span>
         @endif
       </div>
   

       <div class="form-group @if($errors->has('unidade_id')) has-error @endif">
         <label for="unidade_id-field">Unidade</label>
         <input type="text" id="unidade_id-field" name="unidade_id" class="form-control" value="{{ $binomio->unidade_id }}"/>
         @if($errors->has("unidade_id"))
         <span class="help-block">{{ $errors->first("unidade_id") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('inativo')) has-error @endif">
         <label for="inativo-field">Inativo</label>
         <input type="text" id="sexo-field" name="inativo" class="form-control" value="{{ $binomio->inativo }}"/>
         @if($errors->has("inativo"))
         <span class="help-block">{{ $errors->first("inativo") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
         <label for="data_inativo-field">Data de Inativação</label>
         <input type="text" id="data_inativo-field" name="data_inativo" class="form-control" value="{{ $binomio->data_inativo }}"/>
         @if($errors->has("data_inativo"))
         <span class="help-block">{{ $errors->first("data_inativo") }}</span>
         @endif
       </div>
       <div class="form-group @if($errors->has('data_ativo')) has-error @endif">
        <label for="data_ativo-field">Data de Ativação</label>
        <input type="text" id="data_ativo-field" name="data_ativo" class="form-control" value="{{ $binomio->data_ativo }}"/>
        @if($errors->has("data_ativo"))
        <span class="help-block">{{ $errors->first("data_ativo") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('fotografia')) has-error @endif">
        <label for="fotografia-field">Fotografia</label>
        <input type="text" id="fotografia-field" name="fotografia" class="form-control" value="{{ $binomio->fotografia }}"/>
        @if($errors->has("fotografia"))
        <span class="help-block">{{ $errors->first("fotografia") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('tamanhoimagem')) has-error @endif">
        <label for="tamanhoimagem-field">TamanhoImagem</label>
        <input type="text" id="tamanhoimagem-field" name="tamanhoimagem" class="form-control" value="{{ $binomio->tamanhoimagem  }}"/>
        @if($errors->has("tamanhoimagem"))
        <span class="help-block">{{ $errors->first("tamanhoimagem") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('tipoimagem')) has-error @endif">
        <label for="tipoimagem-field">TipoImagem</label>
        <input type="text" id="tipoimagem-field" name="tipoimagem" class="form-control" value="{{$binomio->tipoimagem  }}"/>
        @if($errors->has("tipoimagem"))
        <span class="help-block">{{ $errors->first("tipoimagem") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
        <label for="motivo_inativo-field">Motivo de Inativação</label>
        <input type="text" id="motivo_inativo-field" name="motivo_inativo" class="form-control" value="{{ $binomio->motivo_inativo  }}"/>
        @if($errors->has("motivo_inativo"))
        <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('observacoes')) has-error @endif">
        <label for="observacoes-field">Observacoes</label>
        <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $binomio->observacoes  }}</textarea>
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