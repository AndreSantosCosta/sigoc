@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaCaos / Show #{{$prova_cao->id}}</h1>
        <form action="{{ route('prova_caos.destroy', $prova_cao->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_caos.edit', $prova_cao->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$prova_cao->prova_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="cao_id">CAO_ID</label>
                     <p class="form-control-static">{{$prova_cao->cao_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipoprova">TIPOPROVA</label>
                     <p class="form-control-static">{{$prova_cao->tipoprova}}</p>
                </div>
                    <div class="form-group">
                     <label for="dataprova">DATAPROVA</label>
                     <p class="form-control-static">{{$prova_cao->dataprova}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_caos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection