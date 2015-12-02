@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> ProvaTiros / Edit #{{$prova_tiro->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_tiros.update', $prova_tiro->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('prova_id')) has-error @endif">
                       <label for="prova_id-field">Prova_id</label>
                    <input type="text" id="prova_id-field" name="prova_id" class="form-control" value="{{ $prova_tiro->prova_id }}"/>
                       @if($errors->has("prova_id"))
                        <span class="help-block">{{ $errors->first("prova_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_prova')) has-error @endif">
                       <label for="data_prova-field">Data_prova</label>
                    <input type="text" id="data_prova-field" name="data_prova" class="form-control" value="{{ $prova_tiro->data_prova }}"/>
                       @if($errors->has("data_prova"))
                        <span class="help-block">{{ $errors->first("data_prova") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('num_mecanografico')) has-error @endif">
                       <label for="num_mecanografico-field">Num_mecanografico</label>
                    <input type="text" id="num_mecanografico-field" name="num_mecanografico" class="form-control" value="{{ $prova_tiro->num_mecanografico }}"/>
                       @if($errors->has("num_mecanografico"))
                        <span class="help-block">{{ $errors->first("num_mecanografico") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <textarea class="form-control" id="local-field" rows="3" name="local">{{ $prova_tiro->local }}</textarea>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tipo')) has-error @endif">
                       <label for="tipo-field">Tipo</label>
                    <textarea class="form-control" id="tipo-field" rows="3" name="tipo">{{ $prova_tiro->tipo }}</textarea>
                       @if($errors->has("tipo"))
                        <span class="help-block">{{ $errors->first("tipo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nota_final')) has-error @endif">
                       <label for="nota_final-field">Nota_final</label>
                    <input type="text" id="nota_final-field" name="nota_final" class="form-control" value="{{ $prova_tiro->nota_final }}"/>
                       @if($errors->has("nota_final"))
                        <span class="help-block">{{ $errors->first("nota_final") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <textarea class="form-control" id="arquivo-field" rows="3" name="arquivo">{{ $prova_tiro->arquivo }}</textarea>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_tiros.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection