<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> ProvasGeralBinomios / Editar #{{$provas_geral_binomio->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('provas_geral_binomios.update', $provas_geral_binomio->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('avaliador1')) has-error @endif">
                       <label for="avaliador1-field">Avaliador1</label>
                    <input type="text" id="avaliador1-field" name="avaliador1" class="form-control" value="{{ $provas_geral_binomio->avaliador1 }}"/>
                       @if($errors->has("avaliador1"))
                        <span class="help-block">{{ $errors->first("avaliador1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('avaliador2')) has-error @endif">
                       <label for="avaliador2-field">Avaliador2</label>
                    <input type="text" id="avaliador2-field" name="avaliador2" class="form-control" value="{{ $provas_geral_binomio->avaliador2 }}"/>
                       @if($errors->has("avaliador2"))
                        <span class="help-block">{{ $errors->first("avaliador2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('avaliador3')) has-error @endif">
                       <label for="avaliador3-field">Avaliador3</label>
                    <input type="text" id="avaliador3-field" name="avaliador3" class="form-control" value="{{ $provas_geral_binomio->avaliador3 }}"/>
                       @if($errors->has("avaliador3"))
                        <span class="help-block">{{ $errors->first("avaliador3") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ $provas_geral_binomio->local }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ambito')) has-error @endif">
                       <label for="ambito-field">Ambito</label>
                    <input type="text" id="ambito-field" name="ambito" class="form-control" value="{{ $provas_geral_binomio->ambito }}"/>
                       @if($errors->has("ambito"))
                        <span class="help-block">{{ $errors->first("ambito") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nota')) has-error @endif">
                       <label for="nota-field">Nota</label>
                    <input type="text" id="nota-field" name="nota" class="form-control" value="{{ $provas_geral_binomio->nota }}"/>
                       @if($errors->has("nota"))
                        <span class="help-block">{{ $errors->first("nota") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('situacao')) has-error @endif">
                       <label for="situacao-field">Situacao</label>
                    <input type="text" id="situacao-field" name="situacao" class="form-control" value="{{ $provas_geral_binomio->situacao }}"/>
                       @if($errors->has("situacao"))
                        <span class="help-block">{{ $errors->first("situacao") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                  <?php if (User::tipoUserLogado()=='A') {?>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  <?php }?>
                    <a class="btn btn-link pull-right" href="{{ route('provas_geral_binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection