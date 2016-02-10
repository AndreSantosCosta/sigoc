<?php
use App\User;
?>

@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Criar Prova</h1>
    </div>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('provas.store') }}" method="POST">
              <div class="col-md-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('tipoEntidade')) has-error @endif">
                     <label for="tipoEntidade-field">Entidade</label>
                     <select class="form-control" name="tipoEntidade">
                       @foreach($listaEntidade as $chave => $valor)
                       <option value="{{$chave}}">{{$valor}}</option>
                       @endforeach
                     </select>
                     @if($errors->has("tipoEntidade"))
                     <span class="help-block">{{ $errors->first("tipoEntidade") }}</span>
                     @endif
                   </div>

                    <div class="form-group @if($errors->has('tipoProva')) has-error @endif">
                     <label for="tipoProva-field">Tipo de Prova</label>
                     <select class="form-control" name="tipoProva">
                       @foreach($listaTipoProva as $chave => $valor)
                       <option value="{{$chave}}">{{$valor}}</option>
                       @endforeach
                     </select>
                     @if($errors->has("tipoProva"))
                     <span class="help-block">{{ $errors->first("tipoProva") }}</span>
                     @endif
                   </div>
                   
                    <div class="form-group @if($errors->has('dataProva')) has-error @endif">
                       <label for="dataProva-field">DataProva</label>
                    <input type="date" id="dataProva-field" name="dataProva" class="form-control" value="{{ old("dataProva") }}"/>
                       @if($errors->has("dataProva"))
                        <span class="help-block">{{ $errors->first("dataProva") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('entidade_id')) has-error @endif">
                       <label for="entidade_id-field">Numero </label>
                    <input type="text" id="entidade_id-field" name="entidade_id" class="form-control" value="{{ old("entidade_id") }}"/>
                       @if($errors->has("entidade_id"))
                        <span class="help-block">{{ $errors->first("entidade_id") }}</span>
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
                       <label for="observacoes-field">Observacoes</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ old("observacoes") }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div> 
                <div class="well well-sm">
                <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?> 
                    <button type="submit" class="btn btn-primary">Criar</button>
                <?php }?>
                    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar </a>
                </div>
            </form>

        </div>
    </div>
@endsection