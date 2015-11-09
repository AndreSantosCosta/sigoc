@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaTiros / Show #{{$prova_tiro->id}}</h1>
        <form action="{{ route('prova_tiros.destroy', $prova_tiro->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_tiros.edit', $prova_tiro->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="prova_id">PROVA_ID</label>
                     <p class="form-control-static">{{$prova_tiro->prova_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_prova">DATA_PROVA</label>
                     <p class="form-control-static">{{$prova_tiro->data_prova}}</p>
                </div>
                    <div class="form-group">
                     <label for="num_mecanografico">NUM_MECANOGRAFICO</label>
                     <p class="form-control-static">{{$prova_tiro->num_mecanografico}}</p>
                </div>
                    <div class="form-group">
                     <label for="local">LOCAL</label>
                     <p class="form-control-static">{{$prova_tiro->local}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipo">TIPO</label>
                     <p class="form-control-static">{{$prova_tiro->tipo}}</p>
                </div>
                    <div class="form-group">
                     <label for="nota_final">NOTA_FINAL</label>
                     <p class="form-control-static">{{$prova_tiro->nota_final}}</p>
                </div>
                    <div class="form-group">
                     <label for="arquivo">ARQUIVO</label>
                     <p class="form-control-static">{{$prova_tiro->arquivo}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_tiros.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection