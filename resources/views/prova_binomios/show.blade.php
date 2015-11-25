@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaBinomios / Show #{{$prova_binomio->id}}</h1>
        <form action="{{ route('prova_binomios.destroy', $prova_binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_binomios.edit', $prova_binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$prova_binomio->prova_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="binomio_id">BINOMIO_ID</label>
                     <p class="form-control-static">{{$prova_binomio->binomio_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipoprova">TIPOPROVA</label>
                     <p class="form-control-static">{{$prova_binomio->tipoprova}}</p>
                </div>
                    <div class="form-group">
                     <label for="dataprova">DATAPROVA</label>
                     <p class="form-control-static">{{$prova_binomio->dataprova}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection