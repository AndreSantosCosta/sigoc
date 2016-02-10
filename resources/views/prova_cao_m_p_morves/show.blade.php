<?php
use App\User;
?>

@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaCaoMPMorves / Show #{{$prova_cao_m_p_morf->id}}</h1>
        <?php if (User::tipoUserLogado()=='A') {?>
            <form action="{{ route('prova_cao_m_p_morves.destroy', $prova_cao_m_p_morf->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_cao_m_p_morves.edit', $prova_cao_m_p_morf->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
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
                     <label for="peso">PESO</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->peso}}</p>
                </div>
                    <div class="form-group">
                     <label for="comprimento">COMPRIMENTO</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->comprimento}}</p>
                </div>
                    <div class="form-group">
                     <label for="altgarrote">ALTGARROTE</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->altgarrote}}</p>
                </div>
                    <div class="form-group">
                     <label for="altgarupa">ALTGARUPA</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->altgarupa}}</p>
                </div>
                    <div class="form-group">
                     <label for="pelagem">PELAGEM</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->pelagem}}</p>
                </div>
                    <div class="form-group">
                     <label for="perimetro">PERIMETRO</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->perimetro}}</p>
                </div>
                    <div class="form-group">
                     <label for="orelhas">ORELHAS</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->orelhas}}</p>
                </div>
                    <div class="form-group">
                     <label for="distolhos">DISTOLHOS</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->distolhos}}</p>
                </div>
                    <div class="form-group">
                     <label for="distocciptrufa">DISTOCCIPTRUFA</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->distocciptrufa}}</p>
                </div>
                    <div class="form-group">
                     <label for="compchanfro">COMPCHANFRO</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->compchanfro}}</p>
                </div>
                    <div class="form-group">
                     <label for="diamchanfro">DIAMCHANFRO</label>
                     <p class="form-control-static">{{$prova_cao_m_p_morf->diamchanfro}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_cao_m_p_morves.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

        </div>
    </div>

@endsection