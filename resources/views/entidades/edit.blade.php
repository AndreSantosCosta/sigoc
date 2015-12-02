@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Entidades / Edit #{{$entidade->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('entidades.update', $entidade->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('tipoentidade')) has-error @endif">
                       <label for="tipoentidade-field">TipoEntidade</label>
                    <input type="text" id="tipoentidade-field" name="tipoentidade" class="form-control" value="{{ $entidade->tipoentidade }}"/>
                       @if($errors->has("tipoentidade"))
                        <span class="help-block">{{ $errors->first("tipoentidade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ $entidade->nome }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('inativo')) has-error @endif">
                       <label for="inativo-field">Inativo</label>
                    <input type="text" id="inativo-field" name="inativo" class="form-control" value="{{ $entidade->inativo }}"/>
                       @if($errors->has("inativo"))
                        <span class="help-block">{{ $errors->first("inativo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
                       <label for="data_inativo-field">Data_inativo</label>
                    <input type="text" id="data_inativo-field" name="data_inativo" class="form-control" value="{{ $entidade->data_inativo }}"/>
                       @if($errors->has("data_inativo"))
                        <span class="help-block">{{ $errors->first("data_inativo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_ativo')) has-error @endif">
                       <label for="data_ativo-field">Data_ativo</label>
                    <input type="text" id="data_ativo-field" name="data_ativo" class="form-control" value="{{ $entidade->data_ativo }}"/>
                       @if($errors->has("data_ativo"))
                        <span class="help-block">{{ $errors->first("data_ativo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('fotografia')) has-error @endif">
                       <label for="fotografia-field">Fotografia</label>
                    <input type="text" id="fotografia-field" name="fotografia" class="form-control" value="{{ $entidade->fotografia }}"/>
                       @if($errors->has("fotografia"))
                        <span class="help-block">{{ $errors->first("fotografia") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tamanhoimagem')) has-error @endif">
                       <label for="tamanhoimagem-field">TamanhoImagem</label>
                    <input type="text" id="tamanhoimagem-field" name="tamanhoimagem" class="form-control" value="{{ $entidade->tamanhoimagem }}"/>
                       @if($errors->has("tamanhoimagem"))
                        <span class="help-block">{{ $errors->first("tamanhoimagem") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tipoimagem')) has-error @endif">
                       <label for="tipoimagem-field">TipoImagem</label>
                    <input type="text" id="tipoimagem-field" name="tipoimagem" class="form-control" value="{{ $entidade->tipoimagem }}"/>
                       @if($errors->has("tipoimagem"))
                        <span class="help-block">{{ $errors->first("tipoimagem") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observacoes</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $entidade->observacoes }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('entidades.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection