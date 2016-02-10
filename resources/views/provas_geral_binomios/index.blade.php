<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvasGeralBinomios
            <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
                <a class="btn btn-success pull-right" href="{{ route('provas_geral_binomios.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
            <?php }?>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($provas_geral_binomios->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>AVALIADOR1</th>
                        <th>AVALIADOR2</th>
                        <th>AVALIADOR3</th>
                        <th>LOCAL</th>
                        <th>AMBITO</th>
                        <th>NOTA</th>
                        <th>SITUACAO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($provas_geral_binomios as $provas_geral_binomio)
                            <tr>
                                <td>{{$provas_geral_binomio->id}}</td>
                                <td>{{$provas_geral_binomio->avaliador1}}</td>
                    <td>{{$provas_geral_binomio->avaliador2}}</td>
                    <td>{{$provas_geral_binomio->avaliador3}}</td>
                    <td>{{$provas_geral_binomio->local}}</td>
                    <td>{{$provas_geral_binomio->ambito}}</td>
                    <td>{{$provas_geral_binomio->nota}}</td>
                    <td>{{$provas_geral_binomio->situacao}}</td>
                                <td class="text-right">
                                    <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U') {?>
                                        <a class="btn btn-xs btn-primary" href="{{ route('provas_geral_binomios.show', $provas_geral_binomio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <?php }?>
                                    <?php if (User::tipoUserLogado()=='A') {?>
                                        <a class="btn btn-xs btn-warning" href="{{ route('provas_geral_binomios.edit', $provas_geral_binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('provas_geral_binomios.destroy', $provas_geral_binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
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
                {!! $provas_geral_binomios->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazia!</h3>
            @endif

        </div>
    </div>

@endsection