@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> ProvaCaoTIPers / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_cao_t_i_pers.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('idprovacao')) has-error @endif">
                       <label for="idprovacao-field">IdProvaCao</label>
                    <input type="text" id="idprovacao-field" name="idprovacao" class="form-control" value="{{ old("idprovacao") }}"/>
                       @if($errors->has("idprovacao"))
                        <span class="help-block">{{ $errors->first("idprovacao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
                       <label for="data_nascim-field">Data_nascim</label>
                    <input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ old("data_nascim") }}"/>
                       @if($errors->has("data_nascim"))
                        <span class="help-block">{{ $errors->first("data_nascim") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('avaliador')) has-error @endif">
                       <label for="avaliador-field">Avaliador</label>
                    <input type="text" id="avaliador-field" name="avaliador" class="form-control" value="{{ old("avaliador") }}"/>
                       @if($errors->has("avaliador"))
                        <span class="help-block">{{ $errors->first("avaliador") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('executante')) has-error @endif">
                       <label for="executante-field">Executante</label>
                    <input type="text" id="executante-field" name="executante" class="form-control" value="{{ old("executante") }}"/>
                       @if($errors->has("executante"))
                        <span class="help-block">{{ $errors->first("executante") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <textarea class="form-control" id="local-field" rows="3" name="local">{{ old("local") }}</textarea>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('seguimento')) has-error @endif">
                       <label for="seguimento-field">Seguimento</label>
                    <input type="text" id="seguimento-field" name="seguimento" class="form-control" value="{{ old("seguimento") }}"/>
                       @if($errors->has("seguimento"))
                        <span class="help-block">{{ $errors->first("seguimento") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('levantar')) has-error @endif">
                       <label for="levantar-field">Levantar</label>
                    <input type="text" id="levantar-field" name="levantar" class="form-control" value="{{ old("levantar") }}"/>
                       @if($errors->has("levantar"))
                        <span class="help-block">{{ $errors->first("levantar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('submissao')) has-error @endif">
                       <label for="submissao-field">Submissao</label>
                    <input type="text" id="submissao-field" name="submissao" class="form-control" value="{{ old("submissao") }}"/>
                       @if($errors->has("submissao"))
                        <span class="help-block">{{ $errors->first("submissao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('chamada')) has-error @endif">
                       <label for="chamada-field">Chamada</label>
                    <input type="text" id="chamada-field" name="chamada" class="form-control" value="{{ old("chamada") }}"/>
                       @if($errors->has("chamada"))
                        <span class="help-block">{{ $errors->first("chamada") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('buscaobj')) has-error @endif">
                       <label for="buscaobj-field">BuscaObj</label>
                    <input type="text" id="buscaobj-field" name="buscaobj" class="form-control" value="{{ old("buscaobj") }}"/>
                       @if($errors->has("buscaobj"))
                        <span class="help-block">{{ $errors->first("buscaobj") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('jornal')) has-error @endif">
                       <label for="jornal-field">Jornal</label>
                    <input type="text" id="jornal-field" name="jornal" class="form-control" value="{{ old("jornal") }}"/>
                       @if($errors->has("jornal"))
                        <span class="help-block">{{ $errors->first("jornal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('chapeu')) has-error @endif">
                       <label for="chapeu-field">Chapeu</label>
                    <input type="text" id="chapeu-field" name="chapeu" class="form-control" value="{{ old("chapeu") }}"/>
                       @if($errors->has("chapeu"))
                        <span class="help-block">{{ $errors->first("chapeu") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mesa')) has-error @endif">
                       <label for="mesa-field">Mesa</label>
                    <input type="text" id="mesa-field" name="mesa" class="form-control" value="{{ old("mesa") }}"/>
                       @if($errors->has("mesa"))
                        <span class="help-block">{{ $errors->first("mesa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dor')) has-error @endif">
                       <label for="dor-field">Dor</label>
                    <input type="text" id="dor-field" name="dor" class="form-control" value="{{ old("dor") }}"/>
                       @if($errors->has("dor"))
                        <span class="help-block">{{ $errors->first("dor") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notafinal')) has-error @endif">
                       <label for="notafinal-field">NotaFinal</label>
                    <input type="text" id="notafinal-field" name="notafinal" class="form-control" value="{{ old("notafinal") }}"/>
                       @if($errors->has("notafinal"))
                        <span class="help-block">{{ $errors->first("notafinal") }}</span>
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
                    <a class="btn btn-link pull-right" href="{{ route('prova_cao_t_i_pers.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection