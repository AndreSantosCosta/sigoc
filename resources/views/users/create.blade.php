@extends('layout')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1><i class="glyphicon glyphicon-plus"></i> Criar User </h1>
  </div>
</div>
@endsection

@section('content')

@include('error')

<div class="row">
  <div class="col-md-12">
    <form action="{{ route('users.store') }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="col-md-12">	
        
        <div class="form-group @if($errors->has('name')) has-error @endif">
          <label for="name-field">Nome</label>
          <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
          @if($errors->has("name"))
          <span class="help-block">{{ $errors->first("name") }}</span>
          @endif
        </div>

        <div class="form-group @if($errors->has('email')) has-error @endif">
          <label for="email-field">Email</label>
          <input type="text" id="email-field" name="email" class="form-control" value="{{ old("email") }}"/>
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
            @foreach($listaTipoMilitar as $chave => $valor)
            <option value="{{$chave}}" {{ ($user->tipo== $valor)? "selected" : ""}}>{{$valor}}</option>
            @endforeach
          </select>
          @if($errors->has("tipo"))
          <span class="help-block">{{ $errors->first("tipo") }}</span>
          @endif
        </div>

      <div class="form-group @if($errors->has('inativo')) has-error @endif">
        <label for="inativo-field">Inativo</label>
        <input type="checkbox" id="inativo-field" name="inativo" value="{{ old("inativo") }}"/>
        @if($errors->has("inativo"))
        <span class="help-block">{{ $errors->first("inativo") }}</span>
        @endif
      </div>


        <!-- *********************************************************************************************** -->
        <?php /*<div class="form-group @if($errors->has('password')) has-error @endif">
          <label for="password-field">Password</label>
          <input type="password" id="password-field" name="password" class="form-control" value="{{ old("password") }}"/>
          @if($errors->has("password"))
          <span class="help-block">{{ $errors->first("password") }}</span>
          @endif
        </div>-->
        <!--<div class="form-group @if($errors->has('tipo')) has-error @endif">
          <label for="tipo-field">Tipo</label>
          <input type="text" id="tipo-field" name="tipo" class="form-control" value="{{ old("tipo") }}"/>
          @if($errors->has("tipo"))
          <span class="help-block">{{ $errors->first("tipo") }}</span>
          @endif
        </div>
        <div class="form-group @if($errors->has('inativo')) has-error @endif">
          <label for="inativo-field">Inativo</label>
          <input type="text" id="inativo-field" name="inativo" class="form-control" value="{{ old("inativo") }}"/>
          @if($errors->has("inativo"))
          <span class="help-block">{{ $errors->first("inativo") }}</span>
          @endif
        </div>
        */ ?>
      <!-- *********************************************************************************************** -->
      <?php /*NOME PROPRIO E APELIDO
      <div class="form-group @if($errors->has('nomeProprio')) has-error @endif">
        <label for="nomeProprio-field">Nome Próprio Militar</label>
        <select class="form-control" name="nomeProprio">
          @foreach($listaNomeProprioMilitar as $item)
          <option value="{{$item->id}}">{{$item->nomeProprio}}</option>
          @endforeach
        </select>
        @if($errors->has("nomeProprio"))
        <span class="help-block">{{ $errors->first("nomeProprio") }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('apelido')) has-error @endif">
        <label for="apelido-field">Apelido Militar</label>
        <select class="form-control" name="apelido">
          @foreach($listaApelidoMilitar as $item)
          <option value="{{$item->id}}">{{$item->apelido}}</option>
          @endforeach
        </select>
        @if($errors->has("apelido"))
        <span class="help-block">{{ $errors->first("apelido") }}</span>
        @endif
      </div>
      */ ?>
      <!-- *********************************************************************************************** -->
        <div class="well well-sm">
          <button type="submit" class="btn btn-primary">Criar</button>
          <a class="btn btn-link pull-right" href="{{ route('users.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection