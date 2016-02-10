<?php
use App\User;
?>

@extends('layout')
@section('header')
<div class="page-header">
        <h1>Entidades / Show #{{$entidade->id}}</h1>
        <?php if (User::tipoUserLogado()=='A') {?>
            <form action="{{ route('entidades.destroy', $entidade->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a class="btn btn-warning btn-group" role="group" href="{{ route('entidades.edit', $entidade->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </form>
        <?php }?>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="tipoentidade">TIPOENTIDADE</label>
                     <p class="form-control-static">{{$entidade->tipoentidade}}</p>
                </div>
                    <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$entidade->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="inativo">INATIVO</label>
                     <p class="form-control-static">{{$entidade->inativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_inativo">DATA_INATIVO</label>
                     <p class="form-control-static">{{$entidade->data_inativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_ativo">DATA_ATIVO</label>
                     <p class="form-control-static">{{$entidade->data_ativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="fotografia">FOTOGRAFIA</label>
                     <p class="form-control-static">{{$entidade->fotografia}}</p>
                </div>
                    <div class="form-group">
                     <label for="tamanhoimagem">TAMANHOIMAGEM</label>
                     <p class="form-control-static">{{$entidade->tamanhoimagem}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipoimagem">TIPOIMAGEM</label>
                     <p class="form-control-static">{{$entidade->tipoimagem}}</p>
                </div>
                    <div class="form-group">
                     <label for="observacoes">OBSERVACOES</label>
                     <p class="form-control-static">{{$entidade->observacoes}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('entidades.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

        </div>
    </div>

@endsection