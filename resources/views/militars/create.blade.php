@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Militars / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('militars.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('num_mecanografico')) has-error @endif">
                       <label for="num_mecanografico-field">Num_mecanografico</label>
                    <input type="text" id="num_mecanografico-field" name="num_mecanografico" class="form-control" value="{{ old("num_mecanografico") }}"/>
                       @if($errors->has("num_mecanografico"))
                        <span class="help-block">{{ $errors->first("num_mecanografico") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('posto_id')) has-error @endif">
                       <label for="posto_id-field">Posto_id</label>
                    <input type="text" id="posto_id-field" name="posto_id" class="form-control" value="{{ old("posto_id") }}"/>
                       @if($errors->has("posto_id"))
                        <span class="help-block">{{ $errors->first("posto_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('apelido')) has-error @endif">
                       <label for="apelido-field">Apelido</label>
                    <input type="text" id="apelido-field" name="apelido" class="form-control" value="{{ old("apelido") }}"/>
                       @if($errors->has("apelido"))
                        <span class="help-block">{{ $errors->first("apelido") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ old("nome") }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
                       <label for="data_nascim-field">Data_nascim</label>
                    <input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ old("data_nascim") }}"/>
                       @if($errors->has("data_nascim"))
                        <span class="help-block">{{ $errors->first("data_nascim") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('grupo_sang')) has-error @endif">
                       <label for="grupo_sang-field">Grupo_sang</label>
                    <input type="text" id="grupo_sang-field" name="grupo_sang" class="form-control" value="{{ old("grupo_sang") }}"/>
                       @if($errors->has("grupo_sang"))
                        <span class="help-block">{{ $errors->first("grupo_sang") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('sexo')) has-error @endif">
                       <label for="sexo-field">Sexo</label>
                    <input type="text" id="sexo-field" name="sexo" class="form-control" value="{{ old("sexo") }}"/>
                       @if($errors->has("sexo"))
                        <span class="help-block">{{ $errors->first("sexo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('unidade_id')) has-error @endif">
                       <label for="unidade_id-field">Unidade_id</label>
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
                       <label for="data_inativo-field">Data_inativo</label>
                    <input type="text" id="data_inativo-field" name="data_inativo" class="form-control" value="{{ old("data_inativo") }}"/>
                       @if($errors->has("data_inativo"))
                        <span class="help-block">{{ $errors->first("data_inativo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
                       <label for="motivo_inativo-field">Motivo_inativo</label>
                    <input type="text" id="motivo_inativo-field" name="motivo_inativo" class="form-control" value="{{ old("motivo_inativo") }}"/>
                       @if($errors->has("motivo_inativo"))
                        <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('militars.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection