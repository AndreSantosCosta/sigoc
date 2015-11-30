@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Provas / Edit #{{$prova->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('provas.update', $prova->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('tipoentidade')) has-error @endif">
                       <label for="tipoentidade-field">TipoEntidade</label>
                    <input type="text" id="tipoentidade-field" name="tipoentidade" class="form-control" value="{{ $prova->tipoentidade }}"/>
                       @if($errors->has("tipoentidade"))
                        <span class="help-block">{{ $errors->first("tipoentidade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tipoprova')) has-error @endif">
                       <label for="tipoprova-field">TipoProva</label>
                    <input type="text" id="tipoprova-field" name="tipoprova" class="form-control" value="{{ $prova->tipoprova }}"/>
                       @if($errors->has("tipoprova"))
                        <span class="help-block">{{ $errors->first("tipoprova") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dataprova')) has-error @endif">
                       <label for="dataprova-field">DataProva</label>
                    <input type="text" id="dataprova-field" name="dataprova" class="form-control" value="{{ $prova->dataprova }}"/>
                       @if($errors->has("dataprova"))
                        <span class="help-block">{{ $errors->first("dataprova") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cao_id')) has-error @endif">
                       <label for="cao_id-field">Cao_id</label>
                    <input type="text" id="cao_id-field" name="cao_id" class="form-control" value="{{ $prova->cao_id }}"/>
                       @if($errors->has("cao_id"))
                        <span class="help-block">{{ $errors->first("cao_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('militar_id')) has-error @endif">
                       <label for="militar_id-field">Militar_id</label>
                    <input type="text" id="militar_id-field" name="militar_id" class="form-control" value="{{ $prova->militar_id }}"/>
                       @if($errors->has("militar_id"))
                        <span class="help-block">{{ $errors->first("militar_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('binomio_id')) has-error @endif">
                       <label for="binomio_id-field">Binomio_id</label>
                    <input type="text" id="binomio_id-field" name="binomio_id" class="form-control" value="{{ $prova->binomio_id }}"/>
                       @if($errors->has("binomio_id"))
                        <span class="help-block">{{ $errors->first("binomio_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observacoes</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $prova->observacoes }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection