@extends('layout')
@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1>Ver User #{{$user->num_matricula}} {{$user->name}}</h1>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('users.edit', $user->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="#">
                <div class="col-md-12">
                    <!--<div class="form-group">
                        <label for="nome">ID</label>
                        <p class="form-control-static"></p>
                    </div>-->
                    <div class="form-group">
                         <label for="name">Nome</label>
                         <p class="form-control-static">{{$user->name}}</p>
                    </div>
                    <div class="form-group">
                         <label for="email">Email</label>
                         <p class="form-control-static">{{$user->email}}</p>
                    </div>
                    <div class="form-group">
                         <label for="tipo">Tipo</label>
                         <p class="form-control-static">{{$user->TiposCompletoMilitar}}</p>
                    </div>
                    <div class="form-group">
                        <label for="inativo">Inativo</label>
                        <p class="form-control-static">{{$user->NomeInativo}}</p>
                    </div>
                    <div class="form-group">
                        <label for="origem">Nome Próprio Militar</label>
                        <p class="form-control-static">{{$user->NomeProprioMilitar}}</p>
                    </div> 
                    <div class="form-group">
                        <label for="unidade_id">Apelido Militar</label>
                        <p class="form-control-static">{{$user->NomeApelidoMilitar}}</p>
                    </div>

                </div>
            </form>
            <a class="btn btn-link" href="{{ route('users.index') }}"><i class="glyphicon glyphicon-backward"></i>   Voltar</a>
        </div>
    </div>
@endsection