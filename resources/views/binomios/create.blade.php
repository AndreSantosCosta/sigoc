@extends('layout')

@section('header')
<div class="col-md-12">
	<div class="page-header">
		<h1><i class="glyphicon glyphicon-plus"></i> Criar Binómio </h1>
	</div>
</div>
@endsection

@section('content')

@include('error')

<div class="row">
	<div class="col-md-12">
		<form action="{{ route('binomios.store') }}" method="POST">
			<div class="col-md-12">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group @if($errors->has('data_inicio')) has-error @endif">
					<label for="data_inicio-field">Data de Inicio</label>
					<input type="text" id="data_inicio-field" name="data_inicio" class="form-control" value="{{ old("data_inicio") }}"/>
					@if($errors->has("data_inicio"))
					<span class="help-block">{{ $errors->first("data_inicio") }}</span>
					@endif
				</div>

				<div class="form-group @if($errors->has('militar_id')) has-error @endif">
					<label for="militar_id-field">Número Mecanográfico</label>
					<input type="text" id="militar_id-field" name="militar_id" class="form-control" value="{{ old("militar_id") }}"/>
					@if($errors->has("militar_id"))
					<span class="help-block">{{ $errors->first("militar_id") }}</span>
					@endif
				</div> 

				<div class="form-group @if($errors->has('cao_id')) has-error @endif">
					<label for="cao_id-field">Número Matricula</label>
					<input type="text" id="cao_id-field" name="cao_id" class="form-control" value="{{ old("cao_id") }}"/>
					@if($errors->has("cao_id"))
					<span class="help-block">{{ $errors->first("cao_id") }}</span>
					@endif
				</div> 

				<div class="form-group @if($errors->has('vertente')) has-error @endif">
					<label for="vertente-field">Vertente</label>
					<input type="text" id="vertente-field" name="vertente" class="form-control" value="{{ old("vertente") }}"/>
					@if($errors->has("vertente"))
					<span class="help-block">{{ $errors->first("vertente") }}</span>
					@endif
				</div>

<!-- 
                 <div class="form-group @if($errors->has('numero')) has-error @endif">
                   <label for="numero-field">Número</label>
                   <input type="text" id="numero-field" name="numero" class="form-control" value="{{ old("numero") }}"/>
                   @if($errors->has("numero"))
                   <span class="help-block">{{ $errors->first("numero") }}</span>
                   @endif
               </div> -->

                 <!-- <div class="form-group @if($errors->has('tipoentidade')) has-error @endif">
                   <label for="tipoentidade-field">TipoEntidade</label>
                   <input type="text" id="tipoentidade-field" name="tipoentidade" class="form-control" value="{{ old("tipoentidade") }}"/>
                   @if($errors->has("tipoentidade"))
                   <span class="help-block">{{ $errors->first("tipoentidade") }}</span>
                   @endif
               </div> -->
               <!--   <div class="form-group @if($errors->has('nome')) has-error @endif">
                 <label for="nome-field">Nome</label>
                 <input type="text" id="nome-field" name="nome" class="form-control" value="{{ old("nome") }}"/>
                 @if($errors->has("nome"))
                 <span class="help-block">{{ $errors->first("nome") }}</span>
                 @endif
             </div> -->

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

             <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
             	<label for="motivo_inativo-field">Motivo de Inativação</label>
             	<input type="text" id="motivo_inativo-field" name="motivo_inativo" class="form-control" value="{{ old("motivo_inativo") }}"/>
             	@if($errors->has("motivo_inativo"))
             	<span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
             	@endif
             </div>

             <div class="form-group @if($errors->has('observacoes')) has-error @endif">
             	<label for="observacoes-field">Observacoes</label>
             	<textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ old("observacoes") }}</textarea>
             	@if($errors->has("observacoes"))
             	<span class="help-block">{{ $errors->first("observacoes") }}</span>
             	@endif
             </div>

             <div class="well well-sm">
             	<button type="submit" class="btn btn-primary">Guardar</button>
             	<a class="btn btn-link pull-right" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
             </div>
         </div>

     </div>
 </form>

</div>
</div>
@endsection

