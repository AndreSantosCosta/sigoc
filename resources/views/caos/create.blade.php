@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-plus"></i> Criar Cão </h1>
  </div>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">

    {!! Form::open(array('route' => array( 'caos.store'), 'method' =>'POST')) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-3">
      <div class="form-group @if($errors->has('num_matricula')) has-error @endif">
        {!! Form::label('num_matricula', 'Número Matricula') !!}
        {!! Form::text('num_matricula','', ['class'=>'form-control']) !!}
        @if($errors->has("num_matricula"))
        <span class="help-block">{{ $errors->first("num_matricula") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('num_chip')) has-error @endif">
        {!! Form::label('num_chip', 'Número Chip') !!}
        {!! Form::text('num_chip','', ['class'=>'form-control']) !!}
        @if($errors->has("num_chip"))
        <span class="help-block">{{ $errors->first("num_chip") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('nome')) has-error @endif">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome','', ['class'=>'form-control']) !!}
        @if($errors->has("nome"))
        <span class="help-block">{{ $errors->first("nome") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('raca')) has-error @endif">
        {!! Form::label('raca', 'Raça') !!}
        {!! Form::text('raca','', ['class'=>'form-control']) !!}
        @if($errors->has("raca"))
        <span class="help-block">{{ $errors->first("raca") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('sexo')) has-error @endif">
        {!! Form::label('sexo', 'Sexo') !!}
        {!! Form::select('sexo', $listaSexo, '', ['class'=>'form-control']) !!}
        @if($errors->has("sexo"))
        <span class="help-block">{{ $errors->first("sexo") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('origem')) has-error @endif">
        {!! Form::label('origem', 'Origem') !!}
        {!! Form::select('origem', $listaOrigem, '', ['class'=>'form-control']) !!}
        @if($errors->has("origem"))
        <span class="help-block">{{ $errors->first("origem") }}</span>
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
                    <div class="form-group @if($errors->has('mae_id')) has-error @endif">
                     {!! Form::label('mae_id', 'Mãe ID') !!}
        {!! Form::text('mae_id','', ['class'=>'form-control']) !!}
                       @if($errors->has("mae_id"))
                        <span class="help-block">{{ $errors->first("mae_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mae_nome')) has-error @endif">
                        {!! Form::label('mae_nome', 'Mãe') !!}
        {!! Form::text('mae_nome','', ['class'=>'form-control']) !!}
                       @if($errors->has("mae_nome"))
                        <span class="help-block">{{ $errors->first("mae_nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pai')) has-error @endif">
                      {!! Form::label('pai', 'Pai ID') !!}
        {!! Form::text('pai','', ['class'=>'form-control']) !!}
                       @if($errors->has("pai"))
                        <span class="help-block">{{ $errors->first("pai") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pai_nome')) has-error @endif">
                       {!! Form::label('pai_nome', 'Pai') !!}
        {!! Form::text('pai_nome','', ['class'=>'form-control']) !!}
                       @if($errors->has("pai_nome"))
                        <span class="help-block">{{ $errors->first("pai_nome") }}</span>
                       @endif
                    </div>
              <div class="col-md-4">
      <div class="form-group @if($errors->has('ninhada')) has-error @endif">
        {!! Form::label('ninhada', 'Ninhada') !!}
        {!! Form::text('ninhada','', ['class'=>'form-control']) !!}
        @if($errors->has("ninhada"))
        <span class="help-block">{{ $errors->first("ninhada") }}</span>
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


   <div class="col-md-6">
    <div class="form-group @if($errors->has('inativo')) has-error @endif">
      {!! Form::label('inativo', 'Inativo') !!}
      {!! Form::checkbox('inativo','', ['class'=>'form-control']) !!}
      @if($errors->has("inativo"))
      <span class="help-block">{{ $errors->first("inativo") }}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
      {!! Form::label('data_inativo', 'Data de Inativação') !!}
      {!! Form::date('data_inativo','', ['class'=>'form-control']) !!}
      @if($errors->has("data_inativo"))
      <span class="help-block">{{ $errors->first("data_inativo") }}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group @if($errors->has('data_ativo')) has-error @endif">
      {!! Form::label('data_ativo', 'Data de Ativação') !!}
      {!! Form::date('data_ativo','', ['class'=>'form-control']) !!}
      @if($errors->has("data_ativo"))
      <span class="help-block">{{ $errors->first("data_ativo") }}</span>
      @endif
    </div>
  </div>
  
  <div class="col-md-12">
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
      <a class="btn btn-link pull-right" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
    </div>
  </div>
  {!! Form::close() !!}

</div>
</div>
@endsection