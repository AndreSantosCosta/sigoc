@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> ProvaMilitarPAFisicas / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_militar_p_a_fisicas.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('escalao')) has-error @endif">
                       <label for="escalao-field">Escalao</label>
                    <input type="text" id="escalao-field" name="escalao" class="form-control" value="{{ old("escalao") }}"/>
                       @if($errors->has("escalao"))
                        <span class="help-block">{{ $errors->first("escalao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('flexoestrave')) has-error @endif">
                       <label for="flexoestrave-field">FlexoesTrave</label>
                    <input type="text" id="flexoestrave-field" name="flexoestrave" class="form-control" value="{{ old("flexoestrave") }}"/>
                       @if($errors->has("flexoestrave"))
                        <span class="help-block">{{ $errors->first("flexoestrave") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('abdominais')) has-error @endif">
                       <label for="abdominais-field">Abdominais</label>
                    <input type="text" id="abdominais-field" name="abdominais" class="form-control" value="{{ old("abdominais") }}"/>
                       @if($errors->has("abdominais"))
                        <span class="help-block">{{ $errors->first("abdominais") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('extsolo')) has-error @endif">
                       <label for="extsolo-field">ExtSolo</label>
                    <input type="text" id="extsolo-field" name="extsolo" class="form-control" value="{{ old("extsolo") }}"/>
                       @if($errors->has("extsolo"))
                        <span class="help-block">{{ $errors->first("extsolo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('testcooper')) has-error @endif">
                       <label for="testcooper-field">TestCooper</label>
                    <input type="text" id="testcooper-field" name="testcooper" class="form-control" value="{{ old("testcooper") }}"/>
                       @if($errors->has("testcooper"))
                        <span class="help-block">{{ $errors->first("testcooper") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notafinal')) has-error @endif">
                       <label for="notafinal-field">NotaFinal</label>
                    <input type="text" id="notafinal-field" name="notafinal" class="form-control" value="{{ old("notafinal") }}"/>
                       @if($errors->has("notafinal"))
                        <span class="help-block">{{ $errors->first("notafinal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ambito')) has-error @endif">
                       <label for="ambito-field">Ambito</label>
                    <input type="text" id="ambito-field" name="ambito" class="form-control" value="{{ old("ambito") }}"/>
                       @if($errors->has("ambito"))
                        <span class="help-block">{{ $errors->first("ambito") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <input type="text" id="arquivo-field" name="arquivo" class="form-control" value="{{ old("arquivo") }}"/>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_militar_p_a_fisicas.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection