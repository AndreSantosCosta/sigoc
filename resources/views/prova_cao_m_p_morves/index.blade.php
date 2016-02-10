<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvaCaoMPMorves
            <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
                <a class="btn btn-success pull-right" href="{{ route('prova_cao_m_p_morves.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
            <?php }?>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_cao_m_p_morves->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PESO</th>
                        <th>COMPRIMENTO</th>
                        <th>ALTGARROTE</th>
                        <th>ALTGARUPA</th>
                        <th>PELAGEM</th>
                        <th>PERIMETRO</th>
                        <th>ORELHAS</th>
                        <th>DISTOLHOS</th>
                        <th>DISTOCCIPTRUFA</th>
                        <th>COMPCHANFRO</th>
                        <th>DIAMCHANFRO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_cao_m_p_morves as $prova_cao_m_p_morf)
                            <tr>
                                <td>{{$prova_cao_m_p_morf->id}}</td>
                                <td>{{$prova_cao_m_p_morf->peso}}</td>
                    <td>{{$prova_cao_m_p_morf->comprimento}}</td>
                    <td>{{$prova_cao_m_p_morf->altgarrote}}</td>
                    <td>{{$prova_cao_m_p_morf->altgarupa}}</td>
                    <td>{{$prova_cao_m_p_morf->pelagem}}</td>
                    <td>{{$prova_cao_m_p_morf->perimetro}}</td>
                    <td>{{$prova_cao_m_p_morf->orelhas}}</td>
                    <td>{{$prova_cao_m_p_morf->distolhos}}</td>
                    <td>{{$prova_cao_m_p_morf->distocciptrufa}}</td>
                    <td>{{$prova_cao_m_p_morf->compchanfro}}</td>
                    <td>{{$prova_cao_m_p_morf->diamchanfro}}</td>
                                <td class="text-right">
                                    <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U') {?>
                                        <a class="btn btn-xs btn-primary" href="{{ route('prova_cao_m_p_morves.show', $prova_cao_m_p_morf->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <?php }?>
                                    <?php if (User::tipoUserLogado()=='A') {?>
                                        <a class="btn btn-xs btn-warning" href="{{ route('prova_cao_m_p_morves.edit', $prova_cao_m_p_morf->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('prova_cao_m_p_morves.destroy', $prova_cao_m_p_morf->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                                        </form>
                                    <?php }?>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $prova_cao_m_p_morves->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazia!</h3>
            @endif

        </div>
    </div>

@endsection