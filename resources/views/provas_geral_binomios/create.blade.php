@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> ProvasGeralBinomios / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('provas_geral_binomios.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('idprovabinomio')) has-error @endif">
                       <label for="idprovabinomio-field">IdProvaBinomio</label>
                    <input type="text" id="idprovabinomio-field" name="idprovabinomio" class="form-control" value="{{ old("idprovabinomio") }}"/>
                       @if($errors->has("idprovabinomio"))
                        <span class="help-block">{{ $errors->first("idprovabinomio") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
                       <label for="data_nascim-field">Data_nascim</label>
                    <input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ old("data_nascim") }}"/>
                       @if($errors->has("data_nascim"))
                        <span class="help-block">{{ $errors->first("data_nascim") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('avaliador1')) has-error @endif">
                       <label for="avaliador1-field">Avaliador1</label>
                    <input type="text" id="avaliador1-field" name="avaliador1" class="form-control" value="{{ old("avaliador1") }}"/>
                       @if($errors->has("avaliador1"))
                        <span class="help-block">{{ $errors->first("avaliador1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('avaliador2')) has-error @endif">
                       <label for="avaliador2-field">Avaliador2</label>
                    <input type="text" id="avaliador2-field" name="avaliador2" class="form-control" value="{{ old("avaliador2") }}"/>
                       @if($errors->has("avaliador2"))
                        <span class="help-block">{{ $errors->first("avaliador2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('avaliador3')) has-error @endif">
                       <label for="avaliador3-field">Avaliador3</label>
                    <input type="text" id="avaliador3-field" name="avaliador3" class="form-control" value="{{ old("avaliador3") }}"/>
                       @if($errors->has("avaliador3"))
                        <span class="help-block">{{ $errors->first("avaliador3") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ old("local") }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ambito')) has-error @endif">
                       <label for="ambito-field">Ambito</label>
                    <input type="text" id="ambito-field" name="ambito" class="form-control" value="{{ old("ambito") }}"/>
                       @if($errors->has("ambito"))
                        <span class="help-block">{{ $errors->first("ambito") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nota')) has-error @endif">
                       <label for="nota-field">Nota</label>
                    <input type="text" id="nota-field" name="nota" class="form-control" value="{{ old("nota") }}"/>
                       @if($errors->has("nota"))
                        <span class="help-block">{{ $errors->first("nota") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('situacao')) has-error @endif">
                       <label for="situacao-field">Situacao</label>
                    <input type="text" id="situacao-field" name="situacao" class="form-control" value="{{ old("situacao") }}"/>
                       @if($errors->has("situacao"))
                        <span class="help-block">{{ $errors->first("situacao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observacoes</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ old("observacoes") }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
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
                    <a class="btn btn-link pull-right" href="{{ route('provas_geral_binomios.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection