<?php
use App\User;
?>

@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvaCaoTANAT1s
            <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
                <a class="btn btn-success pull-right" href="{{ route('prova_cao_t_a_n_a_t1s.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
            <?php }?>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_cao_t_a_n_a_t1s->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>AVALIADOR</th>
                        <th>LOCAL</th>
                        <th>ATITUTE</th>
                        <th>AGILIDADECONFIANCA</th>
                        <th>RPISOSSONS</th>
                        <th>RAPROXVULTO</th>
                        <th>RDISPAROS</th>
                        <th>INSTPRESAPERIST</th>
                        <th>INTSBUSCA</th>
                        <th>LADRIDO</th>
                        <th>INSTDEFESA</th>
                        <th>TECNMORDIDA</th>
                        <th>QUALIDMORDIDA</th>
                        <th>COMBATLUTA</th>
                        <th>NOTAFINAL</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_cao_t_a_n_a_t1s as $prova_cao_t_a_n_a_t1)
                            <tr>
                                <td>{{$prova_cao_t_a_n_a_t1->id}}</td>
                                <td>{{$prova_cao_t_a_n_a_t1->avaliador}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->local}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->atitute}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->agilidadeconfianca}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->rpisossons}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->raproxvulto}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->rdisparos}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->instpresaperist}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->intsbusca}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->ladrido}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->instdefesa}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->tecnmordida}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->qualidmordida}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->combatluta}}</td>
                    <td>{{$prova_cao_t_a_n_a_t1->notafinal}}</td>
                                <td class="text-right">
                                    <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U') {?>
                                        <a class="btn btn-xs btn-primary" href="{{ route('prova_cao_t_a_n_a_t1s.show', $prova_cao_t_a_n_a_t1->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <?php }?>
                                    <?php if (User::tipoUserLogado()=='A') {?>
                                        <a class="btn btn-xs btn-warning" href="{{ route('prova_cao_t_a_n_a_t1s.edit', $prova_cao_t_a_n_a_t1->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('prova_cao_t_a_n_a_t1s.destroy', $prova_cao_t_a_n_a_t1->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
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
                {!! $prova_cao_t_a_n_a_t1s->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazia!</h3>
            @endif

        </div>
    </div>

@endsection