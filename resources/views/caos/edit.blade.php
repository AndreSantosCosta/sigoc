@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Caos / Edit #{{$cao->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('caos.update', $cao->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('num_matricula')) has-error @endif">
                       <label for="num_matricula-field">Num_matricula</label>
                    <input type="text" id="num_matricula-field" name="num_matricula" class="form-control" value="{{ $cao->num_matricula }}"/>
                       @if($errors->has("num_matricula"))
                        <span class="help-block">{{ $errors->first("num_matricula") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('num_chip')) has-error @endif">
                       <label for="num_chip-field">Num_chip</label>
                    <input type="text" id="num_chip-field" name="num_chip" class="form-control" value="{{ $cao->num_chip }}"/>
                       @if($errors->has("num_chip"))
                        <span class="help-block">{{ $errors->first("num_chip") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('raca')) has-error @endif">
                       <label for="raca-field">Raca</label>
                    <input type="text" id="raca-field" name="raca" class="form-control" value="{{ $cao->raca }}"/>
                       @if($errors->has("raca"))
                        <span class="help-block">{{ $errors->first("raca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('sexo')) has-error @endif">
                       <label for="sexo-field">Sexo</label>
                    <input type="text" id="sexo-field" name="sexo" class="form-control" value="{{ $cao->sexo }}"/>
                       @if($errors->has("sexo"))
                        <span class="help-block">{{ $errors->first("sexo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('origem')) has-error @endif">
                       <label for="origem-field">Origem</label>
                    <input type="text" id="origem-field" name="origem" class="form-control" value="{{ $cao->origem }}"/>
                       @if($errors->has("origem"))
                        <span class="help-block">{{ $errors->first("origem") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
                       <label for="data_nascim-field">Data_nascim</label>
                    <input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ $cao->data_nascim }}"/>
                       @if($errors->has("data_nascim"))
                        <span class="help-block">{{ $errors->first("data_nascim") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mae_id')) has-error @endif">
                       <label for="mae_id-field">Mae_id</label>
                    <input type="text" id="mae_id-field" name="mae_id" class="form-control" value="{{ $cao->mae_id }}"/>
                       @if($errors->has("mae_id"))
                        <span class="help-block">{{ $errors->first("mae_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mae_nome')) has-error @endif">
                       <label for="mae_nome-field">Mae_nome</label>
                    <input type="text" id="mae_nome-field" name="mae_nome" class="form-control" value="{{ $cao->mae_nome }}"/>
                       @if($errors->has("mae_nome"))
                        <span class="help-block">{{ $errors->first("mae_nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pai_id')) has-error @endif">
                       <label for="pai_id-field">Pai_id</label>
                    <input type="text" id="pai_id-field" name="pai_id" class="form-control" value="{{ $cao->pai_id }}"/>
                       @if($errors->has("pai_id"))
                        <span class="help-block">{{ $errors->first("pai_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pai_nome')) has-error @endif">
                       <label for="pai_nome-field">Pai_nome</label>
                    <input type="text" id="pai_nome-field" name="pai_nome" class="form-control" value="{{ $cao->pai_nome }}"/>
                       @if($errors->has("pai_nome"))
                        <span class="help-block">{{ $errors->first("pai_nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ninhada')) has-error @endif">
                       <label for="ninhada-field">Ninhada</label>
                    <input type="text" id="ninhada-field" name="ninhada" class="form-control" value="{{ $cao->ninhada }}"/>
                       @if($errors->has("ninhada"))
                        <span class="help-block">{{ $errors->first("ninhada") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
                       <label for="motivo_inativo-field">Motivo_inativo</label>
                    <input type="text" id="motivo_inativo-field" name="motivo_inativo" class="form-control" value="{{ $cao->motivo_inativo }}"/>
                       @if($errors->has("motivo_inativo"))
                        <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection