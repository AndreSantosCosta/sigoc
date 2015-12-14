@extends('layout')
@section('header')
<div class="page-header">
  <div class="col-md-12">
    <h1>Ver Binomio #{{$binomio->id}}</h1>
    <form action="{{ route('binomios.destroy', $binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="btn-group pull-right" role="group" aria-label="...">
            <a class="btn btn-warning btn-group" role="group" href="{{ route('binomios.edit', $binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
        </div>
    </div>
</form>

</div> 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <form action="#">
           <div class="col-md-12">
                <!-- <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div> -->
                <div class="form-group">
                   <label for="data_inicio">DATA DE INICIO</label>
                   <p class="form-control-static">{{$binomio->data_inicio}}</p>
               </div>
               <div class="form-group">
                   <label for="militar_id">NUMERO MECANOGRAFICO</label>
                   <p class="form-control-static">{{$binomio->militar_id}}</p>
               </div>
               <div class="form-group">
                   <label for="cao_id">NUMERO MATRICULA</label>
                   <p class="form-control-static">{{$binomio->cao_id}}</p>
               </div>
               <div class="form-group">
                   <label for="vertente">VERTENTE</label>
                   <p class="form-control-static">{{$binomio->vertente}}</p>
               </div>
               <div class="form-group">
                 <label for="unidade_id">UNIDADE</label>
                 <p class="form-control-static">{{$binomio->NomeUnidade}}</p>
             </div>
             <div class="form-group">
               <label for="motivo_inativo">MOTIVO DE INATIVAÇÃO</label>
               <p class="form-control-static">{{$binomio->motivo_inativo}}</p>
           </div>
           
       </form>

       <a class="btn btn-link" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

   </div>
</div>

@endsection