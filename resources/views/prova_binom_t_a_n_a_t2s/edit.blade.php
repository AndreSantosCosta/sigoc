@extends('layout')

@section('header')
 <div class="col-md-12">
    <div class="page-header">
   
        <h1><i class="glyphicon glyphicon-edit"></i> Editar Prova TANAT2 Binomio #<a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></h1>
    </div>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">

            <form action="{{ route('prova_binom_t_a_n_a_t2s.update', $prova->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group @if($errors->has('dataprova')) has-error @endif">
                       <label for="dataprova-field">Data de Prova</label>
                    <input type="date" id="dataprova-field" name="dataprova" class="form-control" value="{{ $prova->dataprova }}"/>
                       @if($errors->has("dataprova"))
                        <span class="help-block">{{ $errors->first("dataprova") }}</span>
                       @endif
                    </div> 
                <div class="form-group @if($errors->has('avaliador')) has-error @endif">
                       <label for="avaliador-field">Avaliador</label>
                    <input type="text" id="avaliador-field" name="avaliador" class="form-control" value="{{ $prova->avaliador }}"/>
                       @if($errors->has("avaliador"))
                        <span class="help-block">{{ $errors->first("avaliador") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ $prova->local }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('atitute')) has-error @endif">
                       <label for="atitute-field">Atitute</label>
                    <input type="text" id="atitute-field" name="atitute" class="form-control" value="{{ $prova->atitute }}"/>
                       @if($errors->has("atitute"))
                        <span class="help-block">{{ $errors->first("atitute") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('memoriaMuscular')) has-error @endif">
                       <label for="memoriaMuscular-field">MemoriaMuscular</label>
                    <input type="text" id="memoriaMuscular-field" name="memoriaMuscular" class="form-control" value="{{ $prova->memoriaMuscular }}"/>
                       @if($errors->has("memoriaMuscular"))
                        <span class="help-block">{{ $errors->first("memoriaMuscular") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('agilidadeConfianca')) has-error @endif">
                       <label for="agilidadeConfianca-field">AgilidadeConfianca</label>
                    <input type="text" id="agilidadeConfianca-field" name="agilidadeConfianca" class="form-control" value="{{ $prova->agilidadeConfianca }}"/>
                       @if($errors->has("agilidadeConfianca"))
                        <span class="help-block">{{ $errors->first("agilidadeConfianca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rPisosSons')) has-error @endif">
                       <label for="rPisosSons-field">RPisosSons</label>
                    <input type="text" id="rPisosSons-field" name="rPisosSons" class="form-control" value="{{ $prova->rPisosSons }}"/>
                       @if($errors->has("rPisosSons"))
                        <span class="help-block">{{ $errors->first("rPisosSons") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rAproxVulto')) has-error @endif">
                       <label for="rAproxVulto-field">RAproxVulto</label>
                    <input type="text" id="rAproxVulto-field" name="rAproxVulto" class="form-control" value="{{ $prova->rAproxVulto }}"/>
                       @if($errors->has("rAproxVulto"))
                        <span class="help-block">{{ $errors->first("rAproxVulto") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rDisparos')) has-error @endif">
                       <label for="rDisparos-field">RDisparos</label>
                    <input type="text" id="rDisparos-field" name="rDisparos" class="form-control" value="{{ $prova->rDisparos }}"/>
                       @if($errors->has("rDisparos"))
                        <span class="help-block">{{ $errors->first("rDisparos") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instPresaPerist')) has-error @endif">
                       <label for="instPresaPerist-field">InstPresaPerist</label>
                    <input type="text" id="instPresaPerist-field" name="instPresaPerist" class="form-control" value="{{ $prova->instPresaPerist }}"/>
                       @if($errors->has("instPresaPerist"))
                        <span class="help-block">{{ $errors->first("instPresaPerist") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('intsBusca')) has-error @endif">
                       <label for="intsBusca-field">IntsBusca</label>
                    <input type="text" id="intsBusca-field" name="intsBusca" class="form-control" value="{{ $prova->intsBusca }}"/>
                       @if($errors->has("intsBusca"))
                        <span class="help-block">{{ $errors->first("intsBusca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('marcPessoasObj')) has-error @endif">
                       <label for="marcPessoasObj-field">MarcPessoasObj</label>
                    <input type="text" id="marcPessoasObj-field" name="marcPessoasObj" class="form-control" value="{{ $prova->marcPessoasObj }}"/>
                       @if($errors->has("marcPessoasObj"))
                        <span class="help-block">{{ $errors->first("marcPessoasObj") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('inicPistas')) has-error @endif">
                       <label for="inicPistas-field">InicPistas</label>
                    <input type="text" id="inicPistas-field" name="inicPistas" class="form-control" value="{{ $prova->inicPistas }}"/>
                       @if($errors->has("inicPistas"))
                        <span class="help-block">{{ $errors->first("inicPistas") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ladrido')) has-error @endif">
                       <label for="ladrido-field">Ladrido</label>
                    <input type="text" id="ladrido-field" name="ladrido" class="form-control" value="{{ $prova->ladrido }}"/>
                       @if($errors->has("ladrido"))
                        <span class="help-block">{{ $errors->first("ladrido") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instDefesa')) has-error @endif">
                       <label for="instDefesa-field">InstDefesa</label>
                    <input type="text" id="instDefesa-field" name="instDefesa" class="form-control" value="{{ $prova->instDefesa }}"/>
                       @if($errors->has("instDefesa"))
                        <span class="help-block">{{ $errors->first("instDefesa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tecnMordida')) has-error @endif">
                       <label for="tecnMordida-field">TecnMordida</label>
                    <input type="text" id="tecnMordida-field" name="tecnMordida" class="form-control" value="{{ $prova->tecnMordida }}"/>
                       @if($errors->has("tecnMordida"))
                        <span class="help-block">{{ $errors->first("tecnMordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qualidMordida')) has-error @endif">
                       <label for="qualidMordida-field">QualidMordida</label>
                    <input type="text" id="qualidMordida-field" name="qualidMordida" class="form-control" value="{{ $prova->qualidMordida }}"/>
                       @if($errors->has("qualidMordida"))
                        <span class="help-block">{{ $errors->first("qualidMordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('CombatLuta')) has-error @endif">
                       <label for="CombatLuta-field">CombatLuta</label>
                    <input type="text" id="CombatLuta-field" name="CombatLuta" class="form-control" value="{{ $prova->CombatLuta }}"/>
                       @if($errors->has("CombatLuta"))
                        <span class="help-block">{{ $errors->first("CombatLuta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notaFinal')) has-error @endif">
                       <label for="notaFinal-field">Nota Final</label>
                    <input type="text" id="notaFinal-field" name="notaFinal" class="form-control" value="{{ $prova->notaFinal }}"/>
                       @if($errors->has("notaFinal"))
                        <span class="help-block">{{ $errors->first("notaFinal") }}</span>
                       @endif
                    </div>
                     <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <input type="text" id="arquivo-field" name="arquivo" class="form-control" value="{{ $prova->arquivo }}"/>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
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
                    <button type="submit" class="btn btn-primary" href="{{ route('provasPorEntidade', array('tipoEntidade'=>'B', 'entidade_id'=>$prova->entidade_id)) }}">Guardar</button>
                    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
                </div>
            </form>

        </div>
    </div>
    </div>
@endsection