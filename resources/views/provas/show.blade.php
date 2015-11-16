@extends('layout')
@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1>Ver Prova #{{$prova->tipo_prova}}</h1>
        <form action="{{ route('provas.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('provas.edit', $prova->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <form action="#">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo_prova">PROVA</label>
                    <p class="form-control-static">{{$prova->tipo_prova}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="data_prova">DATA DE PROVA</label>
                    <p class="form-control-static">{{$prova->data_prova}}</p>
                </div>
            </div>
            <div class="col-md-6">
             <div class="form-group">
                <label for="militar_id">NÚMERO MECANOGRÁFICO</label>
                <p class="form-control-static">{{$prova->numMecanog}}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="cao_id">NÚMERO MATRICULA</label>
                <p class="form-control-static">{{$prova->numMatricula}}</p>
            </div>
        </div>

        <div class="col-md-12">
           <div class="well well-sm">
            <a class="btn btn-link" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
        </div>
    </div> 
</form>
</div>
</div>

@endsection