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
		<form action="{{ route('caos.store') }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="col-md-12">	
					<div class="form-group @if($errors->has('num_matricula')) has-error @endif">
						<label for="num_matricula-field">Número Matrícula</label>
						<input type="text" id="num_matricula-field" name="num_matricula" class="form-control" value="{{ old("num_matricula") }}"/>
						@if($errors->has("num_matricula"))
						<span class="help-block">{{ $errors->first("num_matricula") }}</span>
						@endif
					</div>
          <div class="form-group @if($errors->has('nome')) has-error @endif">
                    <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ old("nome") }}"/>
                    @if($errors->has("nome"))
                    <span class="help-block">{{ $errors->first("nome") }}</span>
                    @endif
                   </div>
					<div class="form-group @if($errors->has('num_chip')) has-error @endif">
                   		<label for="num_chip-field">Número Chip</label>
                   		<input type="text" id="num_chip-field" name="num_chip" class="form-control" value="{{ old("num_chip") }}"/>
                   		@if($errors->has("num_chip"))
                   		<span class="help-block">{{ $errors->first("num_chip") }}</span>
                   		@endif
                   </div>
                   		<div class="form-group @if($errors->has('raca')) has-error @endif">
                   		<label for="raca-field">Raça</label>
                   		<input type="text" id="raca-field" name="raca" class="form-control" value="{{ old("raca") }}"/>
                   		@if($errors->has("raca"))
                   		<span class="help-block">{{ $errors->first("raca") }}</span>
                   		@endif
                   </div>
                   <div class="form-group @if($errors->has('sexo')) has-error @endif">
                   		<label for="sexo-field">Sexo</label>
                   		<input type="text" id="sexo-field" name="sexo" class="form-control" value="{{ old("sexo") }}"/>
                   		@if($errors->has("sexo"))
                   		<span class="help-block">{{ $errors->first("sexo") }}</span>
                   		@endif
                   </div>
                   <div class="form-group @if($errors->has('origem')) has-error @endif">
                 		<label for="origem-field">Origem</label>
                 		<input type="text" id="origem-field" name="origem" class="form-control" value="{{ old("origem") }}"/>
                 		@if($errors->has("origem"))
                 		<span class="help-block">{{ $errors->first("origem") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
                 		<label for="data_nascim-field">Data de Nascimento</label>
                 		<input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ old("data_nascim") }}"/>
                 		@if($errors->has("data_nascim"))
                 		<span class="help-block">{{ $errors->first("data_nascim") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('mae_id')) has-error @endif">
                 		<label for="mae_id-field">ID Mãe</label>
                 		<input type="text" id="mae_id-field" name="mae_id" class="form-control" value="{{ old("mae_id") }}"/>
                 		@if($errors->has("mae_id"))
                 		<span class="help-block">{{ $errors->first("mae_id") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('mae_nome')) has-error @endif">
                 		<label for="mae_nome-field">Nome Mãe</label>
                 		<input type="text" id="mae_nome-field" name="mae_nome" class="form-control" value="{{ old("mae_nome") }}"/>
                 		@if($errors->has("mae_nome"))
                 		<span class="help-block">{{ $errors->first("mae_nome") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('pai_id')) has-error @endif">
                 		<label for="pai_id-field">ID Pai</label>
                 		<input type="text" id="pai_id-field" name="pai_id" class="form-control" value="{{ old("pai_id") }}"/>
                 		@if($errors->has("pai_id"))
                 		<span class="help-block">{{ $errors->first("pai_id") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('pai_nome')) has-error @endif">
                   		<label for="pai_nome-field">Nome Pai</label>
                 		<input type="text" id="pai_nome-field" name="pai_nome" class="form-control" value="{{ old("pai_nome") }}"/>
                 		@if($errors->has("pai_nome"))
                 		<span class="help-block">{{ $errors->first("pai_nome") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('ninhada')) has-error @endif">
                   		<label for="ninhada-field">Ninhada</label>
                 		<input type="text" id="ninhada-field" name="ninhada" class="form-control" value="{{ old("ninhada") }}"/>
                 		@if($errors->has("ninhada"))
                 		<span class="help-block">{{ $errors->first("ninhada") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('unidade_id')) has-error @endif">
                    <label for="unidade_id-field">Unidade</label>
                    <input type="text" id="unidade_id-field" name="unidade_id" class="form-control" value="{{ old("unidade_id") }}"/>
                    @if($errors->has("unidade_id"))
                    <span class="help-block">{{ $errors->first("unidade_id") }}</span>
                    @endif
                   </div>
                 	
                   <div class="form-group @if($errors->has('inativo')) has-error @endif">
                  		<label for="inativo-field">Inativo</label>
                  		<input type="text" id="inativo-field" name="inativo" class="form-control" value="{{ old("inativo") }}"/>
                  		@if($errors->has("inativo"))
                  		<span class="help-block">{{ $errors->first("inativo") }}</span>
                  		@endif
                   </div>
                   <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
                 		<label for="data_inativo-field">Data de Inativação</label>
                 		<input type="text" id="data_inativo-field" name="data_inativo" class="form-control" value="{{ old("data_inativo") }}"/>
                 		@if($errors->has("data_inativo"))
                 		<span class="help-block">{{ $errors->first("data_inativo") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('data_ativo')) has-error @endif">
                 		<label for="data_ativo-field">Data de Ativação</label>
                 		<input type="text" id="data_ativo-field" name="data_ativo" class="form-control" value="{{ old("data_ativo") }}"/>
                 		@if($errors->has("data_ativo"))
                 		<span class="help-block">{{ $errors->first("data_ativo") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('fotografia')) has-error @endif">
                 		<label for="fotografia-field">Fotografia</label>
                 		<input type="text" id="fotografia-field" name="fotografia" class="form-control" value="{{ old("fotografia") }}"/>
                 		@if($errors->has("fotografia"))
                 		<span class="help-block">{{ $errors->first("fotografia") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('tamanhoimagem')) has-error @endif">
                 		<label for="tamanhoimagem-field">Tamanho Imagem</label>
                 		<input type="text" id="tamanhoimagem-field" name="tamanhoimagem" class="form-control" value="{{ old("tamanhoimagem") }}"/>
                 		@if($errors->has("tamanhoimagem"))
                 		<span class="help-block">{{ $errors->first("tamanhoimagem") }}</span>
                 		@endif
                   </div>
                   <div class="form-group @if($errors->has('tipoimagem')) has-error @endif">
                 		<label for="tipoimagem-field">Tipo Imagem</label>
                 		<input type="text" id="tipoimagem-field" name="tipoimagem" class="form-control" value="{{ old("tipoimagem") }}"/>
                 		@if($errors->has("tipoimagem"))
                 		<span class="help-block">{{ $errors->first("tipoimagem") }}</span>
                 		@endif
                   </div>
                    <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
                      <label for="motivo_inativo-field">Motivo Inativo</label>
                      <input type="text" id="motivo_inativo-field" name="motivo_inativo" class="form-control" value="{{ old("motivo_inativo") }}"/>
                      @if($errors->has("motivo_inativo"))
                      <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
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
                 		<button type="submit" class="btn btn-primary">Criar</button>
                 		<a class="btn btn-link pull-right" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
                   </div>
                </div>
        </form>
	</div>
</div>

<?php //@include('subviews.cao_form') ?>

@endsection