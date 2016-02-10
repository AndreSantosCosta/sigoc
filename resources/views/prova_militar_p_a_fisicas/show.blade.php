<?php
use App\User;
?>

@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaMilitarPAFisicas / Show #{{$prova_militar_p_a_fisica->id}}</h1>
        <?php if (User::tipoUserLogado()=='A') {?>
            <form action="{{ route('prova_militar_p_a_fisicas.destroy', $prova_militar_p_a_fisica->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_militar_p_a_fisicas.edit', $prova_militar_p_a_fisica->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
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
                     <label for="escalao">ESCALAO</label>
                     <p class="form-control-static">{{$prova_militar_p_a_fisica->escalao}}</p>
                </div>
                    <div class="form-group">
                     <label for="flexoestrave">FLEXOESTRAVE</label>
                     <p class="form-control-static">{{$prova_militar_p_a_fisica->flexoestrave}}</p>
                </div>
                    <div class="form-group">
                     <label for="abdominais">ABDOMINAIS</label>
                     <p class="form-control-static">{{$prova_militar_p_a_fisica->abdominais}}</p>
                </div>
                    <div class="form-group">
                     <label for="extsolo">EXTSOLO</label>
                     <p class="form-control-static">{{$prova_militar_p_a_fisica->extsolo}}</p>
                </div>
                    <div class="form-group">
                     <label for="testcooper">TESTCOOPER</label>
                     <p class="form-control-static">{{$prova_militar_p_a_fisica->testcooper}}</p>
                </div>
                    <div class="form-group">
                     <label for="notafinal">NOTAFINAL</label>
                     <p class="form-control-static">{{$prova_militar_p_a_fisica->notafinal}}</p>
                </div>
                    <div class="form-group">
                     <label for="ambito">AMBITO</label>
                     <p class="form-control-static">{{$prova_militar_p_a_fisica->ambito}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_militar_p_a_fisicas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

        </div>
    </div>

@endsection