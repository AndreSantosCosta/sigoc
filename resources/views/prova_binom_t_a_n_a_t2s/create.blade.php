@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Criar Prova TANAT2 </h1>
    </div>
      </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
            <form action="{{ route('prova_binom_t_a_n_a_t2s.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <input type="hidden" id="entidade_id-field" name="entidade_id" value="{{ $entidade_id }}">

                <div class="form-group @if($errors->has('dataProva')) has-error @endif">
                       <label for="dataProva-field">Data Prova</label>
                    <input type="date" id="dataProva-field" name="dataProva" class="form-control" value="{{ old("dataProva") }}"/>
                       @if($errors->has("dataProva"))
                        <span class="help-block">{{ $errors->first("dataProva") }}</span>
                       @endif
                    </div>

                <div class="form-group @if($errors->has('avaliador')) has-error @endif">
                       <label for="avaliador-field">Avaliador</label>
                    <input type="text" id="avaliador-field" name="avaliador" class="form-control" value="{{ old("avaliador") }}"/>
                       @if($errors->has("avaliador"))
                        <span class="help-block">{{ $errors->first("avaliador") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ old("local") }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('atitute')) has-error @endif">
                       <label for="atitute-field">Atitute</label>
                    <input type="text" id="atitute-field" name="atitute" class="form-control" value="{{ old("atitute") }}"/>
                       @if($errors->has("atitute"))
                        <span class="help-block">{{ $errors->first("atitute") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('memoriaMuscular')) has-error @endif">
                       <label for="memoriaMuscular-field">Memoria Muscular</label>
                    <input type="text" id="memoriaMuscular-field" name="memoriaMuscular" class="form-control" value="{{ old("memoriaMuscular") }}"/>
                       @if($errors->has("memoriaMuscular"))
                        <span class="help-block">{{ $errors->first("memoriaMuscular") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('agilidadeConfianca')) has-error @endif">
                       <label for="agilidadeConfianca-field">Agilidade e Confianca</label>
                    <input type="text" id="agilidadeConfianca-field" name="agilidadeConfianca" class="form-control" value="{{ old("agilidadeConfianca") }}"/>
                       @if($errors->has("agilidadeConfianca"))
                        <span class="help-block">{{ $errors->first("agilidadeConfianca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rPisosSons')) has-error @endif">
                       <label for="rPisosSons-field">Reação Pisos Sons</label>
                    <input type="text" id="rPisosSons-field" name="rPisosSons" class="form-control" value="{{ old("rPisosSons") }}"/>
                       @if($errors->has("rPisosSons"))
                        <span class="help-block">{{ $errors->first("rPisosSons") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rAproxVulto')) has-error @endif">
                       <label for="rAproxVulto-field">Reação Aproximação Vulto</label>
                    <input type="text" id="rAproxVulto-field" name="rAproxVulto" class="form-control" value="{{ old("rAproxVulto") }}"/>
                       @if($errors->has("rAproxVulto"))
                        <span class="help-block">{{ $errors->first("rAproxVulto") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rDisparos')) has-error @endif">
                       <label for="rDisparos-field">Reação Disparos</label>
                    <input type="text" id="rDisparos-field" name="rDisparos" class="form-control" value="{{ old("rDisparos") }}"/>
                       @if($errors->has("rDisparos"))
                        <span class="help-block">{{ $errors->first("rDisparos") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instPresaPerist')) has-error @endif">
                       <label for="instPresaPerist-field">Instinto Presa Persistencia</label>
                    <input type="text" id="instPresaPerist-field" name="instPresaPerist" class="form-control" value="{{ old("instPresaPerist") }}"/>
                       @if($errors->has("instPresaPerist"))
                        <span class="help-block">{{ $errors->first("instPresaPerist") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('intsBusca')) has-error @endif">
                       <label for="intsBusca-field">Intensidade Busca</label>
                    <input type="text" id="intsBusca-field" name="intsBusca" class="form-control" value="{{ old("intsBusca") }}"/>
                       @if($errors->has("intsBusca"))
                        <span class="help-block">{{ $errors->first("intsBusca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('marcPessoasObj')) has-error @endif">
                       <label for="marcPessoasObj-field">Marcação Pessoas Objetos</label>
                    <input type="text" id="marcPessoasObj-field" name="marcPessoasObj" class="form-control" value="{{ old("marcPessoasObj") }}"/>
                       @if($errors->has("marcPessoasObj"))
                        <span class="help-block">{{ $errors->first("marcPessoasObj") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('inicPistas')) has-error @endif">
                       <label for="inicPistas-field">Iniciação Pistas</label>
                    <input type="text" id="inicPistas-field" name="inicPistas" class="form-control" value="{{ old("inicPistas") }}"/>
                       @if($errors->has("inicPistas"))
                        <span class="help-block">{{ $errors->first("inicPistas") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ladrido')) has-error @endif">
                       <label for="ladrido-field">Ladrido</label>
                    <input type="text" id="ladrido-field" name="ladrido" class="form-control" value="{{ old("ladrido") }}"/>
                       @if($errors->has("ladrido"))
                        <span class="help-block">{{ $errors->first("ladrido") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instDefesa')) has-error @endif">
                       <label for="instDefesa-field">Instinto Defesa</label>
                    <input type="text" id="instDefesa-field" name="instDefesa" class="form-control" value="{{ old("instDefesa") }}"/>
                       @if($errors->has("instDefesa"))
                        <span class="help-block">{{ $errors->first("instDefesa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tecnMordida')) has-error @endif">
                       <label for="tecnMordida-field">Tecnica Mordida</label>
                    <input type="text" id="tecnMordida-field" name="tecnMordida" class="form-control" value="{{ old("tecnMordida") }}"/>
                       @if($errors->has("tecnMordida"))
                        <span class="help-block">{{ $errors->first("tecnMordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qualidMordida')) has-error @endif">
                       <label for="qualidMordida-field">Qualidade Mordida</label>
                    <input type="text" id="qualidMordida-field" name="qualidMordida" class="form-control" value="{{ old("qualidMordida") }}"/>
                       @if($errors->has("qualidMordida"))
                        <span class="help-block">{{ $errors->first("qualidMordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('CombatLuta')) has-error @endif">
                       <label for="CombatLuta-field">Combatividade Luta</label>
                    <input type="text" id="CombatLuta-field" name="CombatLuta" class="form-control" value="{{ old("CombatLuta") }}"/>
                       @if($errors->has("CombatLuta"))
                        <span class="help-block">{{ $errors->first("CombatLuta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notaFinal')) has-error @endif">
                       <label for="notaFinal-field">Nota Final</label>
                    <input type="text" id="notaFinal-field" name="notaFinal" class="form-control" value="{{ old("notaFinal") }}"/>
                       @if($errors->has("notaFinal"))
                        <span class="help-block">{{ $errors->first("notaFinal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <input type="text" id="arquivo-field" name="arquivo" class="form-control" value="{{ old("arquivo") }}"/>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observações</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ old("observacoes") }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div> 
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Criar</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_binom_t_a_n_a_t2s.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
                </div>
            </form>

        </div>
    </div>
      </div>
@endsection