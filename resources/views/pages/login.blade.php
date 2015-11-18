@extends('layout')

@section('title')
	Login
@stop

@section('content')
    <!-- Header -->
    <!--<div class="geral_container">-->
        <div class="container_login">
        	<div class="sub-container_login">
        		<div class='row'>
        			<div class='col-xs-12 text-center'>
            			<h2>Login</h2>
        			</div>
		        	{!! Form::open() !!}
		        	<div class='col-xs-8 col-xs-offset-2'>
						<!--{!! Form::label('name', 'Username:') !!}-->
						<!--{!! Form::text('name') !!}-->
						{!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Username')) !!}
					</div>
					<div class='col-xs-8 col-xs-offset-2'>
						<!--{!! Form::label('password', 'Password:') !!}-->
						{!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) !!}
					</div>
		        	{!! Form::close() !!}
		        	<div class='col-xs-8 text-center'> 
            			<input type="reset" id="idReset" value="Limpar" class="btn btn-warning">  
            			<input type="submit" id="idSubmit" value="Entrar" class="btn btn-primary"> 
        			</div>
		        </div>
	        </div>
        </div>
    <!--</div>-->
@stop