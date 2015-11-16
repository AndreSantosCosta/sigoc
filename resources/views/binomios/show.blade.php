@extends('layout')
@section('header')
<div class="col-md-12">
    <div class="page-header">
    <h1>Ver Binómio #{{$binomio->id}}</h1>
        <form action="{{ route('binomios.destroy', $binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('binomios.edit', $binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
            <div class="form-group">
                <label for="nome">ID</label>
                <p class="form-control-static"></p>
            </div>
            <div class="form-group">
               <label for="data_inicio">DATA_INICIO</label>
               <p class="form-control-static">{{$binomio->data_inicio}}</p>
           </div>
           <div class="form-group">
               <label for="militar_id">MILITAR_ID</label>
               <p class="form-control-static">{{$binomio->militar_id}}</p>
           </div>
           <div class="form-group">
               <label for="cao_id">CAO_ID</label>
               <p class="form-control-static">{{$binomio->cao_id}}</p>
           </div>
           <div class="form-group">
               <label for="vertente">VERTENTE</label>
               <p class="form-control-static">{{$binomio->vertente}}</p>
           </div>
           <div class="form-group">
               <label for="inativo">INATIVO</label>
               <p class="form-control-static">{{$binomio->inativo}}</p>
           </div>
           <div class="form-group">
               <label for="data_inativo">DATA_INATIVO</label>
               <p class="form-control-static">{{$binomio->data_inativo}}</p>
           </div>
           <div class="form-group">
               <label for="motivo_inativo">MOTIVO_INATIVO</label>
               <p class="form-control-static">{{$binomio->motivo_inativo}}</p>
           </div>
       </form>

       <a class="btn btn-link" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

   </div>
</div>

@endsection