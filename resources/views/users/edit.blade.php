<?php
use App\User;
?>

@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i <i class="glyphicon glyphicon-edit"></i> Editar Utilizador #{{$user->name}}</h1>
  </div>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      <div class="col-md-12">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group @if($errors->has('name')) has-error @endif">
          <label for="name-field">Nome</label>
          <input type="text" id="name-field" name="name" class="form-control" value="{{ $user->name }}"/>
          @if($errors->has("name"))
          <span class="help-block">{{ $errors->first("name") }}</span>
          @endif
        </div>

        <div class="form-group @if($errors->has('email')) has-error @endif">
         <label for="email-field">Email</label>
         <input type="text" id="email-field" name="email" class="form-control" value="{{ $user->email }}"/>
         @if($errors->has("email"))
         <span class="help-block">{{ $errors->first("email") }}</span>
         @endif
       </div>

       <div class="form-group @if($errors->has('password')) has-error @endif">
         <label for="password-field">Password</label>
         <input type="password" id="password-field" name="password" class="form-control" value="{{ $user->password }}"/>
         @if($errors->has("password"))
         <span class="help-block">{{ $errors->first("password") }}</span>
         @endif
       </div>

       <div class="form-group @if($errors->has('tipo')) has-error @endif">
        <label for="tipo-field">Tipo</label>
        
        <select class="form-control" name="tipo">
          @foreach($listaTipoMilitar as $chave => $descricao)
          <option value="{{$chave}}" {{ ($user->tipo == $chave)? " selected" : ""}}>{{$descricao}}</option>
          @endforeach
        </select>
        @if($errors->has("tipo"))
        <span class="help-block">{{ $errors->first("tipo") }}</span>
        @endif
      </div>

      <div class="form-group @if($errors->has('inativo')) has-error @endif">
        <label for="inativo-field">Inativo</label>
        <input type="checkbox" id="inativo-field" name="inativo" {{ ($user->inativo==1)? "checked" : ""}}/>
        @if($errors->has("inativo"))
        <span class="help-block">{{ $errors->first("inativo") }}</span>
        @endif
      </div>
      <div class="well well-sm">
        <?php if (User::tipoUserLogado()=='A') {?>
          <button type="submit" class="btn btn-primary">Guardar</button>
        <?php }?>
        <a class="btn btn-link pull-right" href="{{ route('users.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
      </div>
    </div>
  </form>
</div>
</div>

@endsection