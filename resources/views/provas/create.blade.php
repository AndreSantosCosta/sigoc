@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Provas / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('provas.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('tipoprova')) has-error @endif">
                       <label for="tipoprova-field">TipoProva</label>
                    <input type="text" id="tipoprova-field" name="tipoprova" class="form-control" value="{{ old("tipoprova") }}"/>
                       @if($errors->has("tipoprova"))
                        <span class="help-block">{{ $errors->first("tipoprova") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection