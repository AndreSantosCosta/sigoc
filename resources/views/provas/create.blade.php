@extends('layout')

@section('header')
<div class="page-header">
  <h1><i class="glyphicon glyphicon-plus"></i> Criar Prova </h1>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">
    {!! Form::open(array('route' => array( 'provas.store'), 'method' =>'POST')) !!}
    <div class="col-md-12">
      <div class="col-md-3">
        <div class="form-group @if($errors->has('tipo_prova')) has-error @endif">
         {!! Form::label('tipo_prova', 'Prova') !!}
         {!! Form::text('tipo_prova', '', ['class'=>'form-control']) !!}
         @if($errors->has("tipo_prova"))
         <span class="help-block">{{ $errors->first("tipo_prova") }}</span>
         @endif
       </div>
     </div>
     <div class="col-md-3">
       <div class="form-group @if($errors->has('data_prova')) has-error @endif">
        {!! Form::label('data_prova', 'Data de Prova') !!}
        {!! Form::date('data_prova', '', ['class'=>'form-control']) !!}
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
       {!! Form::text('militar_id','', ['class'=>'form-control']) !!}
       @if($errors->has("militar_id"))
       <span class="help-block">{{ $errors->first("militar_id") }}</span>
       @endif
     </div>
   </div>
   <div class="col-md-3">
    <div class="form-group @if($errors->has('cao_id')) has-error @endif">
     {!! Form::label('cao_id', 'Número Mcanográfico') !!}
     {!! Form::text('cao_id','', ['class'=>'form-control']) !!}
     @if($errors->has("cao_id"))
     <span class="help-block">{{ $errors->first("cao_id") }}</span>
     @endif
   </div>
 </div>
</div>
<div class="col-md-12">
<div class="well well-sm">
    <button type="submit" class="btn btn-primary">Criar</button>
    <?php /*{!! Form::submit('Criar', '', array('class'=>'btn btn-primary')) !!} */?>
    <a class="btn btn-link pull-right" href="{{ route('militars.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
  </div>
</div>
</div>
{!! Form::close() !!}  

<?php /*
<div class="col-md-12"> 

  <form action="{{ route('provas.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group @if($errors->has('tipo_prova')) has-error @endif">
     <label for="tipo_prova-field">Prova</label>
     <input type="text" id="tipo_prova-field" name="tipo_prova" class="form-control" value="{{ old("tipo_prova") }}"/>
     @if($errors->has("tipo_prova"))
     <span class="help-block">{{ $errors->first("tipo_prova") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('data_prova')) has-error @endif">
     <label for="data_prova-field">Data de Prova</label>
     <input type="text" id="data_prova-field" name="data_prova" class="form-control" value="{{ old("data_prova") }}"/>
     @if($errors->has("data_prova"))
     <span class="help-block">{{ $errors->first("data_prova") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('militar_id')) has-error @endif">
     <label for="militar_id-field">Militar_id</label>
     <input type="text" id="militar_id-field" name="militar_id" class="form-control" value="{{ old("militar_id") }}"/>
     @if($errors->has("militar_id"))
     <span class="help-block">{{ $errors->first("militar_id") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('cao_id')) has-error @endif">
     <label for="cao_id-field">Cao_id</label>
     <input type="text" id="cao_id-field" name="cao_id" class="form-control" value="{{ old("cao_id") }}"/>
     @if($errors->has("cao_id"))
     <span class="help-block">{{ $errors->first("cao_id") }}</span>
     @endif
   </div>
   <div class="form-group @if($errors->has('binomio_id')) has-error @endif">
     <label for="binomio_id-field">Binomio_id</label>
     <input type="text" id="binomio_id-field" name="binomio_id" class="form-control" value="{{ old("binomio_id") }}"/>
     @if($errors->has("binomio_id"))
     <span class="help-block">{{ $errors->first("binomio_id") }}</span>
     @endif
   </div>
   <div class="well well-sm">
    <button type="submit" class="btn btn-primary">Criar</button>
    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
  </div>
</form>

</div> */?>

@endsection