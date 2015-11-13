@extends('layout')

@section('header')
<div class="page-header">
  <h1><i class="glyphicon glyphicon-edit"></i> Editar Prova #{{$prova->tipo_prova}}</h1>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {!! Form::model($prova, array('route' => array( 'provas.update', $prova->id ), 'method' =>'PUT')) !!}
  <div class="col-md-12">
    <div class="col-md-3">
      <div class="form-group @if($errors->has('tipo_prova')) has-error @endif">
       {!! Form::label('tipo_prova', 'Prova') !!}
       {!! Form::text('tipo_prova', $prova->tipo_prova, array('class'=>'form-control')) !!}
       @if($errors->has("tipo_prova"))
       <span class="help-block">{{ $errors->first("tipo_prova") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-3">
     <div class="form-group @if($errors->has('data_prova')) has-error @endif">
       {!! Form::label('data_prova', 'Data de Prova') !!}
       {!! Form::date('data_prova', $prova->data_prova, array('class'=>'form-control')) !!}       
       @if($errors->has("data_prova"))
       <span class="help-block">{{ $errors->first("data_prova") }}</span>
       @endif
     </div>
   </div>
 </div>
 <div class="col-md-12">
   <div class="col-md-3">
    <div class="form-group @if($errors->has('militar_id')) has-error @endif">
     {!! Form::label('militar_id', 'Número Mecanográfico') !!}
     {!! Form::text('militar_id', $prova->numMecanog, array('class'=>'form-control')) !!}
     @if($errors->has("militar_id"))
     <span class="help-block">{{ $errors->first("militar_id") }}</span>
     @endif
   </div>
 </div>
 <div class="col-md-3">
  <div class="form-group @if($errors->has('cao_id')) has-error @endif">
    {!! Form::label('cao_id', 'Número Matricula') !!}
    {!! Form::text('cao_id', $prova->numMatricula, array('class'=>'form-control')) !!}
    @if($errors->has("cao_id"))
    <span class="help-block">{{ $errors->first("cao_id") }}</span>
    @endif
  </div>
</div>
</div>
<div class="col-md-12">
  <div class="well well-sm">
    {!! Form::submit('Guardar', '', array('class'=>'btn btn-primary')) !!}
    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
  </div>
</div>
{!! Form::close() !!}



<?php /* <div class="col-md-12">

  <form action="{{ route('provas.update', $prova->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">


    <div class="form-group @if($errors->has('tipo_prova')) has-error @endif">
     <label for="tipo_prova-field">Tipo_prova</label>
     <input type="text" id="tipo_prova-field" name="tipo_prova" class="form-control" value="{{ $prova->tipo_prova }}"/>
     @if($errors->has("tipo_prova"))
     <span class="help-block">{{ $errors->first("tipo_prova") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('data_prova')) has-error @endif">
     <label for="data_prova-field">Data_prova</label>
     <input type="text" id="data_prova-field" name="data_prova" class="form-control" value="{{ $prova->data_prova }}"/>
     @if($errors->has("data_prova"))
     <span class="help-block">{{ $errors->first("data_prova") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('militar_id')) has-error @endif">
     <label for="militar_id-field">Militar_id</label>
     <input type="text" id="militar_id-field" name="militar_id" class="form-control" value="{{ $prova->militar_id }}"/>
     @if($errors->has("militar_id"))
     <span class="help-block">{{ $errors->first("militar_id") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('cao_id')) has-error @endif">
     <label for="cao_id-field">Cao_id</label>
     <input type="text" id="cao_id-field" name="cao_id" class="form-control" value="{{ $prova->cao_id }}"/>
     @if($errors->has("cao_id"))
     <span class="help-block">{{ $errors->first("cao_id") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('binomio_id')) has-error @endif">
     <label for="binomio_id-field">Binomio_id</label>
     <input type="text" id="binomio_id-field" name="binomio_id" class="form-control" value="{{ $prova->binomio_id }}"/>
     @if($errors->has("binomio_id"))
     <span class="help-block">{{ $errors->first("binomio_id") }}</span>
     @endif
   </div>
   <div class="well well-sm">
    <button type="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
  </div>
</form>

</div> */?>
</div>
@endsection