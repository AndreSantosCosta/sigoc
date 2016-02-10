<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvaMilitarPAFisicas
            <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
                <a class="btn btn-success pull-right" href="{{ route('prova_militar_p_a_fisicas.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
            <?php }?>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_militar_p_a_fisicas->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ESCALAO</th>
                        <th>FLEXOESTRAVE</th>
                        <th>ABDOMINAIS</th>
                        <th>EXTSOLO</th>
                        <th>TESTCOOPER</th>
                        <th>NOTAFINAL</th>
                        <th>AMBITO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_militar_p_a_fisicas as $prova_militar_p_a_fisica)
                            <tr>
                                <td>{{$prova_militar_p_a_fisica->id}}</td>
                                <td>{{$prova_militar_p_a_fisica->escalao}}</td>
                    <td>{{$prova_militar_p_a_fisica->flexoestrave}}</td>
                    <td>{{$prova_militar_p_a_fisica->abdominais}}</td>
                    <td>{{$prova_militar_p_a_fisica->extsolo}}</td>
                    <td>{{$prova_militar_p_a_fisica->testcooper}}</td>
                    <td>{{$prova_militar_p_a_fisica->notafinal}}</td>
                    <td>{{$prova_militar_p_a_fisica->ambito}}</td>
                                <td class="text-right">
                                    <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U') {?>
                                        <a class="btn btn-xs btn-primary" href="{{ route('prova_militar_p_a_fisicas.show', $prova_militar_p_a_fisica->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <?php }?>
                                    <?php if (User::tipoUserLogado()=='A') {?>
                                        <a class="btn btn-xs btn-warning" href="{{ route('prova_militar_p_a_fisicas.edit', $prova_militar_p_a_fisica->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('prova_militar_p_a_fisicas.destroy', $prova_militar_p_a_fisica->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
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
                {!! $prova_militar_p_a_fisicas->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazia!</h3>
            @endif

        </div>
    </div>

@endsection