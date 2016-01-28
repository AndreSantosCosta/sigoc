<?php /*
@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('registar') }}</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="/register">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('nokme') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('email') }}</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('password') }}</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ trans('confirmpassword') }}</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ trans('registar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
*/?>

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
