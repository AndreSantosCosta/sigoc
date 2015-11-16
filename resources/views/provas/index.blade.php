@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Provas
            <a class="btn btn-success pull-right" href="{{ route('provas.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
        </h1>

    </div>
 </div>
@endsection

@section('content')
 @include('subviews.provas_list')
    
@endsection