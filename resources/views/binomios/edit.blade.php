@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-edit"></i> Editar Binómio # <?php /*{{$militar->num_mecanografico}}_{{$cao->matricula}}*/?></h1>
  </div>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {!! Form::model($binomio, array('route' => array( 'binomios.update', $binomio->id ), 'method' =>'PUT')) !!}
    <div class="col-md-4">
      <div class="form-group @if($errors->has('data_inicio')) has-error @endif">
        {!! Form::label('data_inicio', 'Data de Início') !!}
        {!! Form::date('data_inicio', $binomio->data_inicio, array('class'=>'form-control')) !!}
        @if($errors->has("data_inicio"))
        <span class="help-block">{{ $errors->first("data_inicio") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group @if($errors->has('militar_id')) has-error @endif">
        {!! Form::label('militar_id', 'Número Mecanográfico') !!}
        {!! Form::text('militar_id', $binomio->militar_id, array('class'=>'form-control')) !!}
        @if($errors->has("militar_id"))
        <span class="help-block">{{ $errors->first("militar_id") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group @if($errors->has('cao_id')) has-error @endif">
        {!! Form::label('cao_id', 'Número Matricula') !!}
        {!! Form::text('cao_id', $binomio->cao_id, array('class'=>'form-control')) !!}
        @if($errors->has("cao_id"))
        <span class="help-block">{{ $errors->first("cao_id") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group @if($errors->has('vertente')) has-error @endif">
       {!! Form::label('vertente', 'Vertente') !!}
       {!! Form::select('vertente', $listaVertente, $binomio->vertente, array('class'=>'form-control')) !!}
       @if($errors->has("vertente"))
       <span class="help-block">{{ $errors->first("vertente") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-7">
     <div class="form-group @if($errors->has('inativo')) has-error @endif">
       {!! Form::label('inativo') !!}
       {!! Form::checkbox('inativo', $binomio->inativo) !!}
       @if($errors->has("inativo"))
       <span class="help-block">{{ $errors->first("inativo") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-5">
     <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
       {!! Form::label('data_inativo', 'Data de Inativação') !!}
       {!! Form::date('data_inativo', $binomio->data_inativo, array('class'=>'form-control')) !!}
       @if($errors->has("data_inativo"))
       <span class="help-block">{{ $errors->first("data_inativo") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-12">
     <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
       {!! Form::label('motivo_inativo', 'Motivo de Inativação') !!}
       {!! Form::text('motivo_inativo', $binomio->motivo_inativo, array('class'=>'form-control')) !!}
       @if($errors->has("motivo_inativo"))
       <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-12">
     <div class="well well-sm">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a class="btn btn-link pull-right" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
    </div>
  </div>
</div>
{!! Form::close() !!}

</div>
</div>
@endsection