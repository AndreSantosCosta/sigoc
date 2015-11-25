@extends('layout')
@section('header')
<div class="page-header">
        <h1>Caos / Show #{{$cao->id}}</h1>
        <form action="{{ route('caos.destroy', $cao->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('caos.edit', $cao->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="num_matricula">NUM_MATRICULA</label>
                     <p class="form-control-static">{{$cao->num_matricula}}</p>
                </div>
                    <div class="form-group">
                     <label for="num_chip">NUM_CHIP</label>
                     <p class="form-control-static">{{$cao->num_chip}}</p>
                </div>
                    <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$cao->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="raca">RACA</label>
                     <p class="form-control-static">{{$cao->raca}}</p>
                </div>
                    <div class="form-group">
                     <label for="sexo">SEXO</label>
                     <p class="form-control-static">{{$cao->sexo}}</p>
                </div>
                    <div class="form-group">
                     <label for="origem">ORIGEM</label>
                     <p class="form-control-static">{{$cao->origem}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_nascim">DATA_NASCIM</label>
                     <p class="form-control-static">{{$cao->data_nascim}}</p>
                </div>
                    <div class="form-group">
                     <label for="mae">MAE</label>
                     <p class="form-control-static">{{$cao->mae}}</p>
                </div>
                    <div class="form-group">
                     <label for="pai">PAI</label>
                     <p class="form-control-static">{{$cao->pai}}</p>
                </div>
                    <div class="form-group">
                     <label for="ninhada">NINHADA</label>
                     <p class="form-control-static">{{$cao->ninhada}}</p>
                </div>
                    <div class="form-group">
                     <label for="fotografia">FOTOGRAFIA</label>
                     <p class="form-control-static">{{$cao->fotografia}}</p>
                </div>
                    <div class="form-group">
                     <label for="tamanhoimagem">TAMANHOIMAGEM</label>
                     <p class="form-control-static">{{$cao->tamanhoimagem}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipoimagem">TIPOIMAGEM</label>
                     <p class="form-control-static">{{$cao->tipoimagem}}</p>
                </div>
                    <div class="form-group">
                     <label for="inativo">INATIVO</label>
                     <p class="form-control-static">{{$cao->inativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_inativo">DATA_INATIVO</label>
                     <p class="form-control-static">{{$cao->data_inativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_ativo">DATA_ATIVO</label>
                     <p class="form-control-static">{{$cao->data_ativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="motivo_inativo">MOTIVO_INATIVO</label>
                     <p class="form-control-static">{{$cao->motivo_inativo}}</p>
                </div>
                    <div class="form-group">
                     <label for="observacoes">OBSERVACOES</label>
                     <p class="form-control-static">{{$cao->observacoes}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection