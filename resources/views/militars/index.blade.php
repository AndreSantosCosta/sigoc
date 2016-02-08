<?php
use App\User;
?>

@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Militares
            <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G') {?>
            	<a class="btn btn-success pull-right" href="{{ route('militars.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar </a>
        	<?php }?>
        </h1>
    </div>
</div>
@endsection

@section('content')
@include('subviews.militar_list')


@endsection 
  