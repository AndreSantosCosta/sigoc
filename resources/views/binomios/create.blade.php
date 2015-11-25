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
                    <div class="form-group @if($errors->has('militar_id')) has-error @endif">
                       <label for="militar_id-field">Militar_id</label>
                    <input type="text" id="militar_id-field" name="militar_id" class="form-control" value="{{ old("militar_id") }}"/>
                       @if($errors->has("militar_id"))
                        <span class="help-block">{{ $errors->first("militar_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cao_id')) has-error @endif">
                       <label for="cao_id-field">Cao_id</label>
                    <input type="text" id="cao_id-field" name="cao_id" class="form-control" value="{{ old("cao_id") }}"/>
                       @if($errors->has("cao_id"))
                        <span class="help-block">{{ $errors->first("cao_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('vertente')) has-error @endif">
                       <label for="vertente-field">Vertente</label>
                    <input type="text" id="vertente-field" name="vertente" class="form-control" value="{{ old("vertente") }}"/>
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
                    <div class="form-group @if($errors->has('data_ativo')) has-error @endif">
                       <label for="data_ativo-field">Data_ativo</label>
                    <input type="text" id="data_ativo-field" name="data_ativo" class="form-control" value="{{ old("data_ativo") }}"/>
                       @if($errors->has("data_ativo"))
                        <span class="help-block">{{ $errors->first("data_ativo") }}</span>
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