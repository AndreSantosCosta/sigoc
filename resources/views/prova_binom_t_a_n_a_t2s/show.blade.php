@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaBinomTANAT2s / Show #{{$prova_binom_t_a_n_a_t2->id}}</h1>
        <form action="{{ route('prova_binom_t_a_n_a_t2s.destroy', $prova_binom_t_a_n_a_t2->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_binom_t_a_n_a_t2s.edit', $prova_binom_t_a_n_a_t2->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="idprovabinomio">IDPROVABINOMIO</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->idprovabinomio}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_nascim">DATA_NASCIM</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->data_nascim}}</p>
                </div>
                    <div class="form-group">
                     <label for="avaliador">AVALIADOR</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->avaliador}}</p>
                </div>
                    <div class="form-group">
                     <label for="local">LOCAL</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->local}}</p>
                </div>
                    <div class="form-group">
                     <label for="atitute">ATITUTE</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->atitute}}</p>
                </div>
                    <div class="form-group">
                     <label for="memoriamuscular">MEMORIAMUSCULAR</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->memoriamuscular}}</p>
                </div>
                    <div class="form-group">
                     <label for="agilidadeconfianca">AGILIDADECONFIANCA</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->agilidadeconfianca}}</p>
                </div>
                    <div class="form-group">
                     <label for="rpisossons">RPISOSSONS</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->rpisossons}}</p>
                </div>
                    <div class="form-group">
                     <label for="raproxvulto">RAPROXVULTO</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->raproxvulto}}</p>
                </div>
                    <div class="form-group">
                     <label for="rdisparos">RDISPAROS</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->rdisparos}}</p>
                </div>
                    <div class="form-group">
                     <label for="instpresaperist">INSTPRESAPERIST</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->instpresaperist}}</p>
                </div>
                    <div class="form-group">
                     <label for="intsbusca">INTSBUSCA</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->intsbusca}}</p>
                </div>
                    <div class="form-group">
                     <label for="marcpessoasobj">MARCPESSOASOBJ</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->marcpessoasobj}}</p>
                </div>
                    <div class="form-group">
                     <label for="inicpistas">INICPISTAS</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->inicpistas}}</p>
                </div>
                    <div class="form-group">
                     <label for="ladrido">LADRIDO</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->ladrido}}</p>
                </div>
                    <div class="form-group">
                     <label for="instdefesa">INSTDEFESA</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->instdefesa}}</p>
                </div>
                    <div class="form-group">
                     <label for="tecnmordida">TECNMORDIDA</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->tecnmordida}}</p>
                </div>
                    <div class="form-group">
                     <label for="qualidmordida">QUALIDMORDIDA</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->qualidmordida}}</p>
                </div>
                    <div class="form-group">
                     <label for="combatluta">COMBATLUTA</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->combatluta}}</p>
                </div>
                    <div class="form-group">
                     <label for="notafinal">NOTAFINAL</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->notafinal}}</p>
                </div>
                    <div class="form-group">
                     <label for="observacoes">OBSERVACOES</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->observacoes}}</p>
                </div>
                    <div class="form-group">
                     <label for="arquivo">ARQUIVO</label>
                     <p class="form-control-static">{{$prova_binom_t_a_n_a_t2->arquivo}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_binom_t_a_n_a_t2s.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection