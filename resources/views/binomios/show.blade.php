@extends('layout')
@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1>Ver Binómio #<?php /*{{$militar->num_mecanografico}}_{{$cao->matricula}}*/?></h1>
    <form action="{{ route('binomios.destroy', $binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group pull-right" role="group" aria-label="...">
        <a class="btn btn-warning btn-group" role="group" href="{{ route('binomios.edit', $binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
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
     <div class="col-md-4">
      <div class="form-group">
       <label for="data_inicio">DATA DE INÍCIO</label>
       <p class="form-control-static">{{$binomio->data_inicio}}</p>
     </div>
   </div>
   <div class="col-md-4">
     <div class="form-group">
       <label for="militar_id">NÚMERO MECANOGRÁFICO</label>
       <p class="form-control-static">{{$binomio->militar_id}}</p>
     </div>
   </div>
   <div class="col-md-4">
     <div class="form-group">
       <label for="cao_id">NÚMERO MATRICULA</label>
       <p class="form-control-static">{{$binomio->cao_id}}</p>
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
       <label for="vertente">VERTENTE</label>
       <p class="form-control-static">{{$binomio->vertente}}</p>
     </div>
   </div>
   <div class="col-md-7">
     <div class="form-group">
       <label for="inativo">INATIVO</label>
       <p class="form-control-static">{{$binomio->inativo}}</p>
     </div>
   </div>
   <div class="col-md-5">
     <div class="form-group">
       <label for="data_inativo">DATA DE INATIVAÇÃO</label>
       <p class="form-control-static">{{$binomio->data_inativo}}</p>
     </div>
   </div>
   <div class="col-md-12">
     <div class="form-group">
     <label for="motivo_inativo">MOTIVO DE INATIVAÇÃO</label>
       <p class="form-control-static">{{$binomio->motivo_inativo}}</p>
     </div>
   </div>

   <div class="col-md-12">
  <div class="form-group">
   <label for="motivo_inativo">PROVAS DO BINÓMIO</label>
   <?php /*<a class="btn btn-link" href="{{ route('prova_*.show', $prova_*->id) }}"> Prova *</a> */?>
   <a class="btn btn-link" href="{{ route('binomios.index') }}"> Prova Avaliação Binómios Obediência</a> 
   <a class="btn btn-link" href="{{ route('binomios.index') }}"> Prova Avaliação Binómios Defesa</a>
 </div>
</div>

   <div class="col-md-12">
     <a class="btn btn-link" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
   </div>
 </form>
</div>
</div>

@endsection