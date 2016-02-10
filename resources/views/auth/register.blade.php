@extends('layout')

@section('title')
    Registar
@stop

@section('content')
<div class="container_register">
    <div class="sub-container_register">
        <div class='row'>
            <div class='col-xs-12 text-center'>
                <h2>Registar</h2>
            </div>
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}
                @if (count($errors) > 0)
                <div>
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
                @endif
                <div class='col-xs-8 col-xs-offset-2'>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nome">
                </div>
                <div class='col-xs-8 col-xs-offset-2'>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                </div>
                <div class='col-xs-8 col-xs-offset-2'>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class='col-xs-8 col-xs-offset-2'>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Password">
                </div>
                <div class='col-xs-12 text-center'>
                    <button type="submit" class="btn btn-primary">Registar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
