@extends('layout')
@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1>Ver Cão #{{$cao->num_matricula}} {{$cao->nome}}</h1>
        <form action="{{ route('caos.destroy', $cao->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('caos.edit', $cao->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="#">
                <div class="col-md-12">
                    <!--<div class="form-group">
                        <label for="nome">ID</label>
                        <p class="form-control-static"></p>
                    </div>-->
                    <div class="form-group">
                         <label for="num_matricula">NÚMERO MATRÍCULA</label>
                         <p class="form-control-static">{{$cao->num_matricula}}</p>
                    </div>
                    <div class="form-group">
                         <label for="num_chip">NÚMERO CHIP</label>
                         <p class="form-control-static">{{$cao->num_chip}}</p>
                    </div>

                    <div class="form-group">
                         <label for="nome">NOME</label>
                         <p class="form-control-static">{{$cao->nomeCao}}</p>
                    </div>

                    <div class="form-group">
                         <label for="raca">RAÇA</label>
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
                         <label for="data_nascim">DATA DE NASCIMENTO</label>
                         <p class="form-control-static">{{$cao->data_nascim}}</p>
                    </div>
                    <!--<div class="form-group">
                         <label for="mae_id">MAE_ID</label>
                         <p class="form-control-static">{{$cao->mae_id}}</p>
                    </div>-->
                    <div class="form-group">
                         <label for="mae_nome">MÃE</label>
                         <p class="form-control-static">{{$cao->mae_nome}}</p>
                    </div>
                    <!--<div class="form-group">
                         <label for="pai_id">PAI_ID</label>
                         <p class="form-control-static">{{$cao->pai_id}}</p>
                    </div>-->
                    <div class="form-group">
                         <label for="pai_nome">PAI</label>
                         <p class="form-control-static">{{$cao->pai_nome}}</p>
                    </div>
                    <div class="form-group">
                         <label for="ninhada">NINHADA</label>
                         <p class="form-control-static">{{$cao->ninhada}}</p>
                    </div>
                    <div class="form-group">
                         <label for="motivo_inativo">MOTIVO INATIVO</label>
                         <p class="form-control-static">{{$cao->motivo_inativo}}</p>
                    </div>
                </div>
            </form>
            <a class="btn btn-link" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i>   Voltar</a>
        </div>
    </div>
@endsection