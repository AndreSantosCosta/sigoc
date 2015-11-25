@extends('layout')
@section('header')
<div class="page-header">
        <h1>Militars / Show #{{$militar->id}}</h1>
        <form action="{{ route('militars.destroy', $militar->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('militars.edit', $militar->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
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
                     <label for="num_mecanografico">NUM_MECANOGRAFICO</label>
                     <p class="form-control-static">{{$militar->num_mecanografico}}</p>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <p class="form-control-static">{{$militar->user_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="posto_id">POSTO_ID</label>
                     <p class="form-control-static">{{$militar->posto_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="apelido">APELIDO</label>
                     <p class="form-control-static">{{$militar->apelido}}</p>
                </div>
                    <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$militar->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_nascim">DATA_NASCIM</label>
                     <p class="form-control-static">{{$militar->data_nascim}}</p>
                </div>
                    <div class="form-group">
                     <label for="grupo_sang">GRUPO_SANG</label>
                     <p class="form-control-static">{{$militar->grupo_sang}}</p>
                </div>
                    <div class="form-group">
                     <label for="sexo">SEXO</label>
                     <p class="form-control-static">{{$militar->sexo}}</p>
                </div>
                    <div class="form-group">
                     <label for="unidade_id">UNIDADE_ID</label>
                     <p class="form-control-static">{{$militar->unidade_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="fotografia">FOTOGRAFIA</label>
                     <p class="form-control-static">{{$militar->fotografia}}</p>
                </div>
                    <div class="form-group">
                     <label for="tamanhoimagem">TAMANHOIMAGEM</label>
                     <p class="form-control-static">{{$militar->tamanhoimagem}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipoimagem">TIPOIMAGEM</label>
                     <p class="form-control-static">{{$militar->tipoimagem}}</p>
                </div>
                    <div class="form-group">
                     <label for="inativo">INATIVO</label>
                     <p class="form-control-static">{{$militar->inativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_inativo">DATA_INATIVO</label>
                     <p class="form-control-static">{{$militar->data_inativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_ativo">DATA_ATIVO</label>
                     <p class="form-control-static">{{$militar->data_ativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="motivo_inativo">MOTIVO_INATIVO</label>
                     <p class="form-control-static">{{$militar->motivo_inativo}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('militars.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection