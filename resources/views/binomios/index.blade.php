@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Binómios
            <a class="btn btn-success pull-right" href="{{ route('binomios.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar </a>
        </h1>
    </div>
</div>
@endsection
@section('content')
@include('subviews.binomio_list')

@endsection@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Binómios
            <a class="btn btn-success pull-right" href="{{ route('binomios.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar </a>
        </h1>
    </div>
</div>
@endsection
@section('content')
@include('subviews.binomio_list')

@endsection