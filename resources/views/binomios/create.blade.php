@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Binomios / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('binomios.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('data_inicio')) has-error @endif">
                       <label for="data_inicio-field">Data_inicio</label>
                    <input type="text" id="data_inicio-field" name="data_inicio" class="form-control" value="{{ old("data_inicio") }}"/>
                       @if($errors->has("data_inicio"))
                        <span class="help-block">{{ $errors->first("data_inicio") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('num_mecanografico')) has-error @endif">
                       <label for="num_mecanografico-field">Num_mecanografico</label>
                    <input type="text" id="num_mecanografico-field" name="num_mecanografico" class="form-control" value="{{ old("num_mecanografico") }}"/>
                       @if($errors->has("num_mecanografico"))
                        <span class="help-block">{{ $errors->first("num_mecanografico") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('num_matricula')) has-error @endif">
                       <label for="num_matricula-field">Num_matricula</label>
                    <input type="text" id="num_matricula-field" name="num_matricula" class="form-control" value="{{ old("num_matricula") }}"/>
                       @if($errors->has("num_matricula"))
                        <span class="help-block">{{ $errors->first("num_matricula") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('vertente')) has-error @endif">
                       <label for="vertente-field">Vertente</label>
                    <textarea class="form-control" id="vertente-field" rows="3" name="vertente">{{ old("vertente") }}</textarea>
                       @if($errors->has("vertente"))
                        <span class="help-block">{{ $errors->first("vertente") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('inativo')) has-error @endif">
                       <label for="inativo-field">Inativo</label>
                    <input type="text" id="inativo-field" name="inativo" class="form-control" value="{{ old("inativo") }}"/>
                       @if($errors->has("inativo"))
                        <span class="help-block">{{ $errors->first("inativo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
                       <label for="data_inativo-field">Data_inativo</label>
                    <input type="text" id="data_inativo-field" name="data_inativo" class="form-control" value="{{ old("data_inativo") }}"/>
                       @if($errors->has("data_inativo"))
                        <span class="help-block">{{ $errors->first("data_inativo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
                       <label for="motivo_inativo-field">Motivo_inativo</label>
                    <textarea class="form-control" id="motivo_inativo-field" rows="3" name="motivo_inativo">{{ old("motivo_inativo") }}</textarea>
                       @if($errors->has("motivo_inativo"))
                        <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection