<?php /*
@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('login') }}</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            Por favor corrige los siguientes errores:<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('email') }}</label>
                            <div class="col-md-6">
                                {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('password') }}</label>
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> {{ trans('remember') }}
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">{{ trans('login') }}</button>
                                <a href="/forgot">{{ trans('forgotpassword') }}</a>
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
    Login
@stop

@section('content')
<div class="container_login">
    <div class="sub-container_login">
        <div class='row'>
            <div class='col-xs-12 text-center'>
                <h2>Login</h2>
            </div>
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <div class='col-xs-8 col-xs-offset-2'>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                </div>
                <div class='col-xs-8 col-xs-offset-2'>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div >
                <!--<div class='col-xs-8 col-xs-offset-2'>
                    <input type="checkbox" name="remember"> Remember Me
                </div>-->
                <div class='col-xs-12 text-center'>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop






