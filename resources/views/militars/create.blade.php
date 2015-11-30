
@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-plus"></i> Criar Militar </h1>
  </div>
</div>
@endsection

@section('content')
@include('error')


<div class="row">
  <div class="col-md-12">
    {!! Form::open(array('route' => array( 'militars.store'), 'method' =>'POST')) !!}
    <div class="col-md-4">
      <div class="form-group @if($errors->has('nome')) has-error @endif">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome', '', ['class'=>'form-control']) !!}
        @if($errors->has("nome"))
        <span class="help-block">{{ $errors->first("nome") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
     <div class="form-group @if($errors->has('apelido')) has-error @endif">
       {!! Form::label('apelido', 'Apelido') !!}
       {!! Form::text('apelido','', ['class'=>'form-control']) !!}
       @if($errors->has("apelido"))
       <span class="help-block">{{ $errors->first("apelido") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-4">
     <div class="form-group @if($errors->has('num_mecanografico')) has-error @endif">
       {!! Form::label('num_mecanografico', 'Número Mecanográfico') !!}
       {!! Form::text('num_mecanografico','', ['class'=>'form-control']) !!}
       @if($errors->has("num_mecanografico"))
       <span class="help-block">{{ $errors->first("num_mecanografico") }}</span>
       @endif
     </div> 
   </div> 
   <div class="col-md-6">
     <div class="form-group @if($errors->has('posto_id')) has-error @endif">
       {!! Form::label('posto_id', 'Posto') !!}
       {!! Form::select('posto_id', $listaPostos,'', ['class'=>'form-control']) !!}
       @if($errors->has("posto_id"))
       <span class="help-block">{{ $errors->first("posto_id") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-6">
    <div class="form-group @if($errors->has('unidade_id')) has-error @endif">
     {!! Form::label('unidade_id', 'Unidade') !!}
     {!! Form::select('unidade_id', $listaUnidades,'', ['class'=>'form-control']) !!}
     @if($errors->has("unidade_id"))
     <span class="help-block">{{ $errors->first("unidade_id") }}</span>
     @endif
   </div>
 </div>

 <div class="col-md-3">
  <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
   {!! Form::label('data_nascim', 'Data de Nascimento') !!}
   {!! Form::date('data_nascim','', ['class'=>'form-control']) !!}
   @if($errors->has("data_nascim"))
   <span class="help-block">{{ $errors->first("data_nascim") }}</span>
   @endif
 </div>
</div>
<div class="col-md-3">
  <div class="form-group @if($errors->has('grupo_sang')) has-error @endif">
    {!! Form::label('grupo_sang', 'Grupo Sanguíneo') !!}
    {!! Form::select('grupo_sang', $gruposSang,'', ['class'=>'form-control']) !!}
    @if($errors->has("grupo_sang"))
    <span class="help-block">{{ $errors->first("grupo_sang") }}</span>
    @endif
  </div>
</div>
<div class="col-md-3">
  <div class="form-group @if($errors->has('sexo')) has-error @endif">
    {!! Form::label('sexo', 'Sexo') !!}
    {!! Form::select('sexo', $listaSexo,'', ['class'=>'form-control']) !!}
    @if($errors->has("sexo"))
    <span class="help-block">{{ $errors->first("sexo") }}</span>
    @endif
  </div>
</div>




<div class="form-group @if($errors->has('fotografia')) has-error @endif">
 <label for="fotografia-field">Fotografia</label>
 <input type="text" id="fotografia-field" name="fotografia" class="form-control" value="{{ old("fotografia") }}"/>
 @if($errors->has("fotografia"))
 <span class="help-block">{{ $errors->first("fotografia") }}</span>
 @endif
</div>
<div class="form-group @if($errors->has('tamanhoimagem')) has-error @endif">
 <label for="tamanhoimagem-field">TamanhoImagem</label>
 <input type="text" id="tamanhoimagem-field" name="tamanhoimagem" class="form-control" value="{{ old("tamanhoimagem") }}"/>
 @if($errors->has("tamanhoimagem"))
 <span class="help-block">{{ $errors->first("tamanhoimagem") }}</span>
 @endif
</div>
<div class="form-group @if($errors->has('tipoimagem')) has-error @endif">
 <label for="tipoimagem-field">TipoImagem</label>
 <input type="text" id="tipoimagem-field" name="tipoimagem" class="form-control" value="{{ old("tipoimagem") }}"/>
 @if($errors->has("tipoimagem"))
 <span class="help-block">{{ $errors->first("tipoimagem") }}</span>
 @endif
</div>


<div class="col-md-2">
  <div class="form-group @if($errors->has('inativo')) has-error @endif">
   {!! Form::label('inativo', 'Inativo') !!}
   {!! Form::checkbox('inativo','', ['class'=>'form-control']) !!}
   @if($errors->has("inativo"))
   <span class="help-block">{{ $errors->first("inativo") }}</span>
   @endif
 </div>
</div>
<div class="col-md-3">
  <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
    {!! Form::label('data_inativo', 'Data de Inativação') !!}
    {!! Form::date('data_inativo','', ['class'=>'form-control']) !!}
    @if($errors->has("data_inativo"))
    <span class="help-block">{{ $errors->first("data_inativo") }}</span>
    @endif
  </div>
</div>
<div class="col-md-3">
  <div class="form-group @if($errors->has('data_ativo')) has-error @endif">
    {!! Form::label('data_ativo', 'Data de Ativação') !!}
    {!! Form::date('data_ativo','', ['class'=>'form-control']) !!}
    @if($errors->has("data_ativo"))
    <span class="help-block">{{ $errors->first("data_ativo") }}</span>
    @endif
  </div>
</div>

<div class="col-md-7">
  <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
    {!! Form::label('motivo_inativo', 'Motivo de Inativação') !!}
    {!! Form::select('motivo_inativo', $listaMotivos,'', ['class'=>'form-control']) !!}
    @if($errors->has("motivo_inativo"))
    <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
    @endif
  </div>
</div>
<div class="col-md-12">
  <div class="form-group @if($errors->has('observacoes')) has-error @endif">
   {!! Form::label('observacoes', 'Observações') !!}
   {!! Form::text('observacoes','', ['class'=>'form-control']) !!}
   @if($errors->has("observacoes"))
   <span class="help-block">{{ $errors->first("observacoes") }}</span>
   @endif
 </div>
</div>
<div class="col-md-12">
  <div class="well well-sm">
    <button type="submit" class="btn btn-primary">Criar</button>
    <?php /*{!! Form::submit('Criar', '', array('class'=>'btn btn-primary')) !!} */?>
    <a class="btn btn-link pull-right" href="{{ route('militars.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
  </div>
</div>

{!! Form::close() !!}

</div>
</div>
@endsection