<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> ProvaCaoTANAT1s / Editar #{{$prova_cao_t_a_n_a_t1->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_cao_t_a_n_a_t1s.update', $prova_cao_t_a_n_a_t1->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('avaliador')) has-error @endif">
                       <label for="avaliador-field">Avaliador</label>
                    <input type="text" id="avaliador-field" name="avaliador" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->avaliador }}"/>
                       @if($errors->has("avaliador"))
                        <span class="help-block">{{ $errors->first("avaliador") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->local }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('atitute')) has-error @endif">
                       <label for="atitute-field">Atitute</label>
                    <input type="text" id="atitute-field" name="atitute" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->atitute }}"/>
                       @if($errors->has("atitute"))
                        <span class="help-block">{{ $errors->first("atitute") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('agilidadeconfianca')) has-error @endif">
                       <label for="agilidadeconfianca-field">AgilidadeConfianca</label>
                    <input type="text" id="agilidadeconfianca-field" name="agilidadeconfianca" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->agilidadeconfianca }}"/>
                       @if($errors->has("agilidadeconfianca"))
                        <span class="help-block">{{ $errors->first("agilidadeconfianca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rpisossons')) has-error @endif">
                       <label for="rpisossons-field">RPisosSons</label>
                    <input type="text" id="rpisossons-field" name="rpisossons" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->rpisossons }}"/>
                       @if($errors->has("rpisossons"))
                        <span class="help-block">{{ $errors->first("rpisossons") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('raproxvulto')) has-error @endif">
                       <label for="raproxvulto-field">RAproxVulto</label>
                    <input type="text" id="raproxvulto-field" name="raproxvulto" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->raproxvulto }}"/>
                       @if($errors->has("raproxvulto"))
                        <span class="help-block">{{ $errors->first("raproxvulto") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rdisparos')) has-error @endif">
                       <label for="rdisparos-field">RDisparos</label>
                    <input type="text" id="rdisparos-field" name="rdisparos" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->rdisparos }}"/>
                       @if($errors->has("rdisparos"))
                        <span class="help-block">{{ $errors->first("rdisparos") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instpresaperist')) has-error @endif">
                       <label for="instpresaperist-field">InstPresaPerist</label>
                    <input type="text" id="instpresaperist-field" name="instpresaperist" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->instpresaperist }}"/>
                       @if($errors->has("instpresaperist"))
                        <span class="help-block">{{ $errors->first("instpresaperist") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('intsbusca')) has-error @endif">
                       <label for="intsbusca-field">IntsBusca</label>
                    <input type="text" id="intsbusca-field" name="intsbusca" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->intsbusca }}"/>
                       @if($errors->has("intsbusca"))
                        <span class="help-block">{{ $errors->first("intsbusca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ladrido')) has-error @endif">
                       <label for="ladrido-field">Ladrido</label>
                    <input type="text" id="ladrido-field" name="ladrido" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->ladrido }}"/>
                       @if($errors->has("ladrido"))
                        <span class="help-block">{{ $errors->first("ladrido") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instdefesa')) has-error @endif">
                       <label for="instdefesa-field">InstDefesa</label>
                    <input type="text" id="instdefesa-field" name="instdefesa" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->instdefesa }}"/>
                       @if($errors->has("instdefesa"))
                        <span class="help-block">{{ $errors->first("instdefesa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tecnmordida')) has-error @endif">
                       <label for="tecnmordida-field">TecnMordida</label>
                    <input type="text" id="tecnmordida-field" name="tecnmordida" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->tecnmordida }}"/>
                       @if($errors->has("tecnmordida"))
                        <span class="help-block">{{ $errors->first("tecnmordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qualidmordida')) has-error @endif">
                       <label for="qualidmordida-field">QualidMordida</label>
                    <input type="text" id="qualidmordida-field" name="qualidmordida" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->qualidmordida }}"/>
                       @if($errors->has("qualidmordida"))
                        <span class="help-block">{{ $errors->first("qualidmordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('combatluta')) has-error @endif">
                       <label for="combatluta-field">CombatLuta</label>
                    <input type="text" id="combatluta-field" name="combatluta" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->combatluta }}"/>
                       @if($errors->has("combatluta"))
                        <span class="help-block">{{ $errors->first("combatluta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notafinal')) has-error @endif">
                       <label for="notafinal-field">NotaFinal</label>
                    <input type="text" id="notafinal-field" name="notafinal" class="form-control" value="{{ $prova_cao_t_a_n_a_t1->notafinal }}"/>
                       @if($errors->has("notafinal"))
                        <span class="help-block">{{ $errors->first("notafinal") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                  <?php if (User::tipoUserLogado()=='A') {?>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  <?php }?>
                    <a class="btn btn-link pull-right" href="{{ route('prova_cao_t_a_n_a_t1s.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection