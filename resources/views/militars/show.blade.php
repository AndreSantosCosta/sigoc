@extends('layout')
@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1>Ver Militar #{{$militar->num_mecanografico}}</h1>
    <form action="{{ route('militars.destroy', $militar->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group pull-right" role="group" aria-label="...">
        <a class="btn btn-warning btn-group" role="group" href="{{ route('militars.edit', $militar->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
        <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">

<!-- 
 {!! Form::model($militar, array('route' => array( 'militars.show', $militar->id ), 'method' =>'PUT')) !!}
   
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('num_mecanografico', 'NÚMERO MECANOGRAFICO') !!}
        {!! Form::text('num_mecanografico', $militar->num_mecanografico, array('class'=>'form-control-static')) !!}
      </div>
    </div> -->


    <form action="#">
     <div class="col-md-4">
      <div class="form-group">
       <label for="num_mecanografico">NÚMERO MECANOGRAFICO</label>
       <p class="form-control-static">{{$militar->num_mecanografico}}</p>
     </div>
   </div>

   <div class="col-md-4">
    <div class="form-group">
     <label for="nome">NOME</label>
     <p class="form-control-static">{{$militar->nome}}</p>
   </div>
 </div>
 <div class="col-md-4">
  <div class="form-group">
   <label for="apelido">APELIDO</label>
   <p class="form-control-static">{{$militar->apelido}}</p>
 </div>
</div>
<div class="col-md-4">
  <div class="form-group">
   <label for="data_nascim">DATA DE NASCIMENTO</label>
   <p class="form-control-static">{{$militar->data_nascim}}</p>
 </div>
</div>
<div class="col-md-4">
  <div class="form-group">
   <label for="grupo_sang">GRUPO SANGUÍNEO</label>
   <p class="form-control-static">{{$militar->grupo_sang}}</p>
 </div> 
</div>
<div class="col-md-4">
  <div class="form-group">
   <label for="sexo">SEXO</label>
   <p class="form-control-static">{{$militar->sexo}}</p>
 </div>
</div>
<div class="col-md-4">
  <div class="form-group">
   <label for="posto_id">POSTO</label>
   <p class="form-control-static">{{$militar->nomePosto}}</p>
 </div>
</div>
<div class="col-md-8">
  <div class="form-group">
   <label for="unidade_id">UNIDADE</label>
   <p class="form-control-static">{{$militar->nomeUnidade}}</p>
 </div>
</div>
<div class="col-md-4">
  <div class="form-group">
   <label for="inativo">INATIVO</label>
   <p class="form-control-static">{{$militar->inativo}}</p>
 </div>
</div>
<div class="col-md-4">
  <div class="form-group">
   <label for="data_inativo">DATA DE INATIVAÇÃO</label>
   <p class="form-control-static">{{$militar->data_inativo}}</p>
 </div>
</div>
<div class="col-md-4">
  <div class="form-group">
   <label for="motivo_inativo">MOTIVO DE INATIVAÇÃO</label>
   <p class="form-control-static">{{$militar->motivo_inativo}}</p>
 </div>
</div>

<div class="col-md-12">
  <div class="form-group">
   <label for="motivo_inativo">PROVAS DO MILITAR</label>
   <?php /*<a class="btn btn-link" href="{{ route('prova_tiros.show', $prova_tiro->id) }}"> Prova Tiro</a> */?>
   <a class="btn btn-link" href="{{ route('militars.index') }}"> Prova Tiro</a> 
   <a class="btn btn-link" href="{{ route('militars.index') }}"> Prova Teórica</a>
   <a class="btn btn-link" href="{{ route('militars.index') }}"> Prova Aptidão Física</a>
 </div>
</div>

<div class="col-md-12">
 <div class="well well-sm">
  <a class="btn btn-link" href="{{ route('militars.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
</div>
</div>

</form>
</div>
</div>

@endsection