@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-edit"></i> Editar Binómio # <?php /*{{$militar->num_mecanografico}}_{{$cao->matricula}}*/?></h1>
  </div>
</div>
@endsection

@section('content')
@include('subviews.binomio_form')

@endsection 