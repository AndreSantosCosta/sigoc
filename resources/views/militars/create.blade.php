
@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-plus"></i> Criar Militar </h1>
  </div>
</div>
@endsection

@section('content')
@include('subviews.militar_form')

@endsection 
