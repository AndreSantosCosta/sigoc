<?php
use App\User;
?>

@extends('layout')
@section('header')
<div class="page-header">
        <h1>Provas / Show #{{$prova->id}}</h1>
        <?php if (User::tipoUserLogado()=='A') {?>
            <form action="{{ route('provas.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a class="btn btn-warning btn-group" role="group" href="{{ route('provas.edit', $prova->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
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
                     <p class="form-control-static">{{$prova->tipoentidade}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipoprova">TIPOPROVA</label>
                     <p class="form-control-static">{{$prova->tipoprova}}</p>
                </div>
                    <div class="form-group">
                     <label for="dataprova">DATAPROVA</label>
                     <p class="form-control-static">{{$prova->dataprova}}</p>
                </div>
                    <div class="form-group">
                     <label for="entidade_id">ENTIDADE_ID</label>
                     <p class="form-control-static">{{$prova->entidade_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="arquivo">ARQUIVO</label>
                     <p class="form-control-static">{{$prova->arquivo}}</p>
                </div>
                    <div class="form-group">
                     <label for="observacoes">OBSERVACOES</label>
                     <p class="form-control-static">{{$prova->observacoes}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

        </div>
    </div>

@endsection