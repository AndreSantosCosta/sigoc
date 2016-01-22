@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaCaoTIPers / Show #{{$prova->id}}</h1>
        <form action="{{ route('prova_cao_t_i_pers.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_cao_t_i_pers.edit', $prova->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="avaliador">AVALIADOR</label>
                     <p class="form-control-static">{{$prova->avaliador}}</p>
                </div>
                    <div class="form-group">
                     <label for="executante">EXECUTANTE</label>
                     <p class="form-control-static">{{$prova->executante}}</p>
                </div>
                    <div class="form-group">
                     <label for="local">LOCAL</label>
                     <p class="form-control-static">{{$prova->local}}</p>
                </div>
                    <div class="form-group">
                     <label for="seguimento">SEGUIMENTO</label>
                     <p class="form-control-static">{{$prova->seguimento}}</p>
                </div>
                    <div class="form-group">
                     <label for="levantar">LEVANTAR</label>
                     <p class="form-control-static">{{$prova->levantar}}</p>
                </div>
                    <div class="form-group">
                     <label for="submissao">SUBMISSAO</label>
                     <p class="form-control-static">{{$prova->submissao}}</p>
                </div>
                    <div class="form-group">
                     <label for="chamada">CHAMADA</label>
                     <p class="form-control-static">{{$prova->chamada}}</p>
                </div>
                    <div class="form-group">
                     <label for="buscaobj">BUSCAOBJ</label>
                     <p class="form-control-static">{{$prova->buscaobj}}</p>
                </div>
                    <div class="form-group">
                     <label for="jornal">JORNAL</label>
                     <p class="form-control-static">{{$prova->jornal}}</p>
                </div>
                    <div class="form-group">
                     <label for="chapeu">CHAPEU</label>
                     <p class="form-control-static">{{$prova->chapeu}}</p>
                </div>
                    <div class="form-group">
                     <label for="mesa">MESA</label>
                     <p class="form-control-static">{{$prova->mesa}}</p>
                </div>
                    <div class="form-group">
                     <label for="dor">DOR</label>
                     <p class="form-control-static">{{$prova->dor}}</p>
                </div>
                    <div class="form-group">
                     <label for="notafinal">NOTAFINAL</label>
                     <p class="form-control-static">{{$prova->notafinal}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_cao_t_i_pers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection