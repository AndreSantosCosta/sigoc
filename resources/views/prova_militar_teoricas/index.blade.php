<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvaMilitarTeoricas
            <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
                <a class="btn btn-success pull-right" href="{{ route('prova_militar_teoricas.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
            <?php }?>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_militar_teoricas->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>AMBITO</th>
                        <th>MATERIAS</th>
                        <th>NOTAFINAL</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_militar_teoricas as $prova_militar_teorica)
                            <tr>
                                <td>{{$prova_militar_teorica->id}}</td>
                                <td>{{$prova_militar_teorica->ambito}}</td>
                    <td>{{$prova_militar_teorica->materias}}</td>
                    <td>{{$prova_militar_teorica->notafinal}}</td>
                                <td class="text-right">
                                    <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U') {?>
                                        <a class="btn btn-xs btn-primary" href="{{ route('prova_militar_teoricas.show', $prova_militar_teorica->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <?php }?>
                                    <?php if (User::tipoUserLogado()=='A') {?>
                                        <a class="btn btn-xs btn-warning" href="{{ route('prova_militar_teoricas.edit', $prova_militar_teorica->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('prova_militar_teoricas.destroy', $prova_militar_teorica->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
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
                {!! $prova_militar_teoricas->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazia!</h3>
            @endif

        </div>
    </div>

@endsection