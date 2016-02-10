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






