@extends('layout')

@section('title')
	Login
@stop

@section('content')
    <!-- Header -->
    <!--<div class="geral_container">-->
        <div class="container_login">
        	{!! Form::open() !!}

				<div class="form-group">
					{!! Form::label('name', 'Username:') !!}
					{!! Form::text('name') !!}
				</div>

				<div class="form-group">
					{!! Form::label('password', 'Password:') !!}
					{!! Form::password('password') !!}
				</div>

        	{!! Form::close() !!}
        </div>
    <!--</div>-->
@stop