@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> ProvaBinomios / Edit #{{$prova_binomio->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_binomios.update', $prova_binomio->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('prova_id')) has-error @endif">
                       <label for="prova_id-field">Prova_id</label>
                    <input type="text" id="prova_id-field" name="prova_id" class="form-control" value="{{ $prova_binomio->prova_id }}"/>
                       @if($errors->has("prova_id"))
                        <span class="help-block">{{ $errors->first("prova_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('binomio_id')) has-error @endif">
                       <label for="binomio_id-field">Binomio_id</label>
                    <input type="text" id="binomio_id-field" name="binomio_id" class="form-control" value="{{ $prova_binomio->binomio_id }}"/>
                       @if($errors->has("binomio_id"))
                        <span class="help-block">{{ $errors->first("binomio_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tipoprova')) has-error @endif">
                       <label for="tipoprova-field">TipoProva</label>
                    <input type="text" id="tipoprova-field" name="tipoprova" class="form-control" value="{{ $prova_binomio->tipoprova }}"/>
                       @if($errors->has("tipoprova"))
                        <span class="help-block">{{ $errors->first("tipoprova") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dataprova')) has-error @endif">
                       <label for="dataprova-field">DataProva</label>
                    <input type="text" id="dataprova-field" name="dataprova" class="form-control" value="{{ $prova_binomio->dataprova }}"/>
                       @if($errors->has("dataprova"))
                        <span class="help-block">{{ $errors->first("dataprova") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection