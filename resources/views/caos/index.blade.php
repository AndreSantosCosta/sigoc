@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Cães
            <a class="btn btn-success pull-right" href="{{ route('caos.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar </a>
        </h1>

    </div>
@endsection

@section('content')
 @include('subviews.cao_list')
    
@endsection