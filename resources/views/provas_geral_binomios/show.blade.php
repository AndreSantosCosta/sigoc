@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvasGeralBinomios / Show #{{$provas_geral_binomio->id}}</h1>
        <form action="{{ route('provas_geral_binomios.destroy', $provas_geral_binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('provas_geral_binomios.edit', $provas_geral_binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="idprovabinomio">IDPROVABINOMIO</label>
                     <p class="form-control-static">{{$provas_geral_binomio->idprovabinomio}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_nascim">DATA_NASCIM</label>
                     <p class="form-control-static">{{$provas_geral_binomio->data_nascim}}</p>
                </div>
                    <div class="form-group">
                     <label for="avaliador1">AVALIADOR1</label>
                     <p class="form-control-static">{{$provas_geral_binomio->avaliador1}}</p>
                </div>
                    <div class="form-group">
                     <label for="avaliador2">AVALIADOR2</label>
                     <p class="form-control-static">{{$provas_geral_binomio->avaliador2}}</p>
                </div>
                    <div class="form-group">
                     <label for="avaliador3">AVALIADOR3</label>
                     <p class="form-control-static">{{$provas_geral_binomio->avaliador3}}</p>
                </div>
                    <div class="form-group">
                     <label for="local">LOCAL</label>
                     <p class="form-control-static">{{$provas_geral_binomio->local}}</p>
                </div>
                    <div class="form-group">
                     <label for="ambito">AMBITO</label>
                     <p class="form-control-static">{{$provas_geral_binomio->ambito}}</p>
                </div>
                    <div class="form-group">
                     <label for="nota">NOTA</label>
                     <p class="form-control-static">{{$provas_geral_binomio->nota}}</p>
                </div>
                    <div class="form-group">
                     <label for="situacao">SITUACAO</label>
                     <p class="form-control-static">{{$provas_geral_binomio->situacao}}</p>
                </div>
                    <div class="form-group">
                     <label for="observacoes">OBSERVACOES</label>
                     <p class="form-control-static">{{$provas_geral_binomio->observacoes}}</p>
                </div>
                    <div class="form-group">
                     <label for="arquivo">ARQUIVO</label>
                     <p class="form-control-static">{{$provas_geral_binomio->arquivo}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('provas_geral_binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection