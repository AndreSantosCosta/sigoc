@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaCaoTIPers / Show #{{$prova_cao_t_i_per->id}}</h1>
        <form action="{{ route('prova_cao_t_i_pers.destroy', $prova_cao_t_i_per->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_cao_t_i_pers.edit', $prova_cao_t_i_per->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="idprovacao">IDPROVACAO</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->idprovacao}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_nascim">DATA_NASCIM</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->data_nascim}}</p>
                </div>
                    <div class="form-group">
                     <label for="avaliador">AVALIADOR</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->avaliador}}</p>
                </div>
                    <div class="form-group">
                     <label for="executante">EXECUTANTE</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->executante}}</p>
                </div>
                    <div class="form-group">
                     <label for="local">LOCAL</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->local}}</p>
                </div>
                    <div class="form-group">
                     <label for="seguimento">SEGUIMENTO</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->seguimento}}</p>
                </div>
                    <div class="form-group">
                     <label for="levantar">LEVANTAR</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->levantar}}</p>
                </div>
                    <div class="form-group">
                     <label for="submissao">SUBMISSAO</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->submissao}}</p>
                </div>
                    <div class="form-group">
                     <label for="chamada">CHAMADA</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->chamada}}</p>
                </div>
                    <div class="form-group">
                     <label for="buscaobj">BUSCAOBJ</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->buscaobj}}</p>
                </div>
                    <div class="form-group">
                     <label for="jornal">JORNAL</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->jornal}}</p>
                </div>
                    <div class="form-group">
                     <label for="chapeu">CHAPEU</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->chapeu}}</p>
                </div>
                    <div class="form-group">
                     <label for="mesa">MESA</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->mesa}}</p>
                </div>
                    <div class="form-group">
                     <label for="dor">DOR</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->dor}}</p>
                </div>
                    <div class="form-group">
                     <label for="notafinal">NOTAFINAL</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->notafinal}}</p>
                </div>
                    <div class="form-group">
                     <label for="observacoes">OBSERVACOES</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->observacoes}}</p>
                </div>
                    <div class="form-group">
                     <label for="arquivo">ARQUIVO</label>
                     <p class="form-control-static">{{$prova_cao_t_i_per->arquivo}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_cao_t_i_pers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection