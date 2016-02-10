<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Entidades
            <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
                <a class="btn btn-success pull-right" href="{{ route('entidades.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
            <?php }?>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($entidades->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TIPOENTIDADE</th>
                        <th>NOME</th>
                        <th>INATIVO</th>
                        <th>DATA_INATIVO</th>
                        <th>DATA_ATIVO</th>
                        <th>FOTOGRAFIA</th>
                        <th>TAMANHOIMAGEM</th>
                        <th>TIPOIMAGEM</th>
                        <th>OBSERVACOES</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($entidades as $entidade)
                            <tr>
                                <td>{{$entidade->id}}</td>
                                <td>{{$entidade->tipoentidade}}</td>
                    <td>{{$entidade->nome}}</td>
                    <td>{{$entidade->inativo}}</td>
                    <td>{{$entidade->data_inativo}}</td>
                    <td>{{$entidade->data_ativo}}</td>
                    <td>{{$entidade->fotografia}}</td>
                    <td>{{$entidade->tamanhoimagem}}</td>
                    <td>{{$entidade->tipoimagem}}</td>
                    <td>{{$entidade->observacoes}}</td>
                                <td class="text-right">
                                    <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U') {?>
                                        <a class="btn btn-xs btn-primary" href="{{ route('entidades.show', $entidade->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <?php }?>
                                    <?php if (User::tipoUserLogado()=='A') {?>
                                        <a class="btn btn-xs btn-warning" href="{{ route('entidades.edit', $entidade->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('entidades.destroy', $entidade->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
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
                {!! $entidades->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazio!</h3>
            @endif

        </div>
    </div>

@endsection