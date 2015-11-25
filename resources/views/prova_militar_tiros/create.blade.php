@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> ProvaMilitarTiros / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_militar_tiros.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('idprovamilitar')) has-error @endif">
                       <label for="idprovamilitar-field">IdProvaMilitar</label>
                    <input type="text" id="idprovamilitar-field" name="idprovamilitar" class="form-control" value="{{ old("idprovamilitar") }}"/>
                       @if($errors->has("idprovamilitar"))
                        <span class="help-block">{{ $errors->first("idprovamilitar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <textarea class="form-control" id="local-field" rows="3" name="local">{{ old("local") }}</textarea>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tipo')) has-error @endif">
                       <label for="tipo-field">Tipo</label>
                    <textarea class="form-control" id="tipo-field" rows="3" name="tipo">{{ old("tipo") }}</textarea>
                       @if($errors->has("tipo"))
                        <span class="help-block">{{ $errors->first("tipo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notafinal')) has-error @endif">
                       <label for="notafinal-field">NotaFinal</label>
                    <input type="text" id="notafinal-field" name="notafinal" class="form-control" value="{{ old("notafinal") }}"/>
                       @if($errors->has("notafinal"))
                        <span class="help-block">{{ $errors->first("notafinal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <textarea class="form-control" id="arquivo-field" rows="3" name="arquivo">{{ old("arquivo") }}</textarea>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_militar_tiros.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection