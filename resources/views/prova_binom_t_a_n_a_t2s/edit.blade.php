@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> ProvaBinomTANAT2s / Edit #{{$prova_binom_t_a_n_a_t2->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_binom_t_a_n_a_t2s.update', $prova_binom_t_a_n_a_t2->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('idprovabinomio')) has-error @endif">
                       <label for="idprovabinomio-field">IdProvaBinomio</label>
                    <input type="text" id="idprovabinomio-field" name="idprovabinomio" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->idprovabinomio }}"/>
                       @if($errors->has("idprovabinomio"))
                        <span class="help-block">{{ $errors->first("idprovabinomio") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
                       <label for="data_nascim-field">Data_nascim</label>
                    <input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->data_nascim }}"/>
                       @if($errors->has("data_nascim"))
                        <span class="help-block">{{ $errors->first("data_nascim") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('avaliador')) has-error @endif">
                       <label for="avaliador-field">Avaliador</label>
                    <input type="text" id="avaliador-field" name="avaliador" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->avaliador }}"/>
                       @if($errors->has("avaliador"))
                        <span class="help-block">{{ $errors->first("avaliador") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->local }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('atitute')) has-error @endif">
                       <label for="atitute-field">Atitute</label>
                    <input type="text" id="atitute-field" name="atitute" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->atitute }}"/>
                       @if($errors->has("atitute"))
                        <span class="help-block">{{ $errors->first("atitute") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('memoriamuscular')) has-error @endif">
                       <label for="memoriamuscular-field">MemoriaMuscular</label>
                    <input type="text" id="memoriamuscular-field" name="memoriamuscular" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->memoriamuscular }}"/>
                       @if($errors->has("memoriamuscular"))
                        <span class="help-block">{{ $errors->first("memoriamuscular") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('agilidadeconfianca')) has-error @endif">
                       <label for="agilidadeconfianca-field">AgilidadeConfianca</label>
                    <input type="text" id="agilidadeconfianca-field" name="agilidadeconfianca" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->agilidadeconfianca }}"/>
                       @if($errors->has("agilidadeconfianca"))
                        <span class="help-block">{{ $errors->first("agilidadeconfianca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rpisossons')) has-error @endif">
                       <label for="rpisossons-field">RPisosSons</label>
                    <input type="text" id="rpisossons-field" name="rpisossons" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->rpisossons }}"/>
                       @if($errors->has("rpisossons"))
                        <span class="help-block">{{ $errors->first("rpisossons") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('raproxvulto')) has-error @endif">
                       <label for="raproxvulto-field">RAproxVulto</label>
                    <input type="text" id="raproxvulto-field" name="raproxvulto" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->raproxvulto }}"/>
                       @if($errors->has("raproxvulto"))
                        <span class="help-block">{{ $errors->first("raproxvulto") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rdisparos')) has-error @endif">
                       <label for="rdisparos-field">RDisparos</label>
                    <input type="text" id="rdisparos-field" name="rdisparos" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->rdisparos }}"/>
                       @if($errors->has("rdisparos"))
                        <span class="help-block">{{ $errors->first("rdisparos") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instpresaperist')) has-error @endif">
                       <label for="instpresaperist-field">InstPresaPerist</label>
                    <input type="text" id="instpresaperist-field" name="instpresaperist" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->instpresaperist }}"/>
                       @if($errors->has("instpresaperist"))
                        <span class="help-block">{{ $errors->first("instpresaperist") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('intsbusca')) has-error @endif">
                       <label for="intsbusca-field">IntsBusca</label>
                    <input type="text" id="intsbusca-field" name="intsbusca" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->intsbusca }}"/>
                       @if($errors->has("intsbusca"))
                        <span class="help-block">{{ $errors->first("intsbusca") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('marcpessoasobj')) has-error @endif">
                       <label for="marcpessoasobj-field">MarcPessoasObj</label>
                    <input type="text" id="marcpessoasobj-field" name="marcpessoasobj" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->marcpessoasobj }}"/>
                       @if($errors->has("marcpessoasobj"))
                        <span class="help-block">{{ $errors->first("marcpessoasobj") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('inicpistas')) has-error @endif">
                       <label for="inicpistas-field">InicPistas</label>
                    <input type="text" id="inicpistas-field" name="inicpistas" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->inicpistas }}"/>
                       @if($errors->has("inicpistas"))
                        <span class="help-block">{{ $errors->first("inicpistas") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ladrido')) has-error @endif">
                       <label for="ladrido-field">Ladrido</label>
                    <input type="text" id="ladrido-field" name="ladrido" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->ladrido }}"/>
                       @if($errors->has("ladrido"))
                        <span class="help-block">{{ $errors->first("ladrido") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instdefesa')) has-error @endif">
                       <label for="instdefesa-field">InstDefesa</label>
                    <input type="text" id="instdefesa-field" name="instdefesa" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->instdefesa }}"/>
                       @if($errors->has("instdefesa"))
                        <span class="help-block">{{ $errors->first("instdefesa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tecnmordida')) has-error @endif">
                       <label for="tecnmordida-field">TecnMordida</label>
                    <input type="text" id="tecnmordida-field" name="tecnmordida" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->tecnmordida }}"/>
                       @if($errors->has("tecnmordida"))
                        <span class="help-block">{{ $errors->first("tecnmordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qualidmordida')) has-error @endif">
                       <label for="qualidmordida-field">QualidMordida</label>
                    <input type="text" id="qualidmordida-field" name="qualidmordida" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->qualidmordida }}"/>
                       @if($errors->has("qualidmordida"))
                        <span class="help-block">{{ $errors->first("qualidmordida") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('combatluta')) has-error @endif">
                       <label for="combatluta-field">CombatLuta</label>
                    <input type="text" id="combatluta-field" name="combatluta" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->combatluta }}"/>
                       @if($errors->has("combatluta"))
                        <span class="help-block">{{ $errors->first("combatluta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notafinal')) has-error @endif">
                       <label for="notafinal-field">NotaFinal</label>
                    <input type="text" id="notafinal-field" name="notafinal" class="form-control" value="{{ $prova_binom_t_a_n_a_t2->notafinal }}"/>
                       @if($errors->has("notafinal"))
                        <span class="help-block">{{ $errors->first("notafinal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observacoes</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $prova_binom_t_a_n_a_t2->observacoes }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <textarea class="form-control" id="arquivo-field" rows="3" name="arquivo">{{ $prova_binom_t_a_n_a_t2->arquivo }}</textarea>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_binom_t_a_n_a_t2s.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection