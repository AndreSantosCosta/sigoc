@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> ProvaMilitarTeoricas / Edit #{{$prova_militar_teorica->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_militar_teoricas.update', $prova_militar_teorica->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('idprovamilitar')) has-error @endif">
                       <label for="idprovamilitar-field">IdProvaMilitar</label>
                    <input type="text" id="idprovamilitar-field" name="idprovamilitar" class="form-control" value="{{ $prova_militar_teorica->idprovamilitar }}"/>
                       @if($errors->has("idprovamilitar"))
                        <span class="help-block">{{ $errors->first("idprovamilitar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ambito')) has-error @endif">
                       <label for="ambito-field">Ambito</label>
                    <input type="text" id="ambito-field" name="ambito" class="form-control" value="{{ $prova_militar_teorica->ambito }}"/>
                       @if($errors->has("ambito"))
                        <span class="help-block">{{ $errors->first("ambito") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('materias')) has-error @endif">
                       <label for="materias-field">Materias</label>
                    <textarea class="form-control" id="materias-field" rows="3" name="materias">{{ $prova_militar_teorica->materias }}</textarea>
                       @if($errors->has("materias"))
                        <span class="help-block">{{ $errors->first("materias") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notafinal')) has-error @endif">
                       <label for="notafinal-field">NotaFinal</label>
                    <input type="text" id="notafinal-field" name="notafinal" class="form-control" value="{{ $prova_militar_teorica->notafinal }}"/>
                       @if($errors->has("notafinal"))
                        <span class="help-block">{{ $errors->first("notafinal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <textarea class="form-control" id="arquivo-field" rows="3" name="arquivo">{{ $prova_militar_teorica->arquivo }}</textarea>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_militar_teoricas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection