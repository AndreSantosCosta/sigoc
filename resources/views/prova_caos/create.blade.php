@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> ProvaCaos / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_caos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('prova_id')) has-error @endif">
                       <label for="prova_id-field">Prova_id</label>
                    <input type="text" id="prova_id-field" name="prova_id" class="form-control" value="{{ old("prova_id") }}"/>
                       @if($errors->has("prova_id"))
                        <span class="help-block">{{ $errors->first("prova_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cao_id')) has-error @endif">
                       <label for="cao_id-field">Cao_id</label>
                    <input type="text" id="cao_id-field" name="cao_id" class="form-control" value="{{ old("cao_id") }}"/>
                       @if($errors->has("cao_id"))
                        <span class="help-block">{{ $errors->first("cao_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tipoprova')) has-error @endif">
                       <label for="tipoprova-field">TipoProva</label>
                    <input type="text" id="tipoprova-field" name="tipoprova" class="form-control" value="{{ old("tipoprova") }}"/>
                       @if($errors->has("tipoprova"))
                        <span class="help-block">{{ $errors->first("tipoprova") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dataprova')) has-error @endif">
                       <label for="dataprova-field">DataProva</label>
                    <input type="text" id="dataprova-field" name="dataprova" class="form-control" value="{{ old("dataprova") }}"/>
                       @if($errors->has("dataprova"))
                        <span class="help-block">{{ $errors->first("dataprova") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_caos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection