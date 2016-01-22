@extends('layout')
@section('header')
<div class="page-header">
        <h1>ProvaBinomTANAT2s / Show #{{$prova->id}}</h1>
        <form action="{{ route('prova_binom_t_a_n_a_t2s.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('prova_binom_t_a_n_a_t2s.edit', $prova->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="avaliador">AVALIADOR</label>
                     <p class="form-control-static">{{$prova->avaliador}}</p>
                </div>
                    <div class="form-group">
                     <label for="local">LOCAL</label>
                     <p class="form-control-static">{{$prova->local}}</p>
                </div>
                    <div class="form-group">
                     <label for="atitute">ATITUTE</label>
                     <p class="form-control-static">{{$prova->atitute}}</p>
                </div>
                    <div class="form-group">
                     <label for="memoriamuscular">MEMORIAMUSCULAR</label>
                     <p class="form-control-static">{{$prova->memoriamuscular}}</p>
                </div>
                    <div class="form-group">
                     <label for="agilidadeconfianca">AGILIDADECONFIANCA</label>
                     <p class="form-control-static">{{$prova->agilidadeconfianca}}</p>
                </div>
                    <div class="form-group">
                     <label for="rpisossons">RPISOSSONS</label>
                     <p class="form-control-static">{{$prova->rpisossons}}</p>
                </div>
                    <div class="form-group">
                     <label for="raproxvulto">RAPROXVULTO</label>
                     <p class="form-control-static">{{$prova->raproxvulto}}</p>
                </div>
                    <div class="form-group">
                     <label for="rdisparos">RDISPAROS</label>
                     <p class="form-control-static">{{$prova->rdisparos}}</p>
                </div>
                    <div class="form-group">
                     <label for="instpresaperist">INSTPRESAPERIST</label>
                     <p class="form-control-static">{{$prova->instpresaperist}}</p>
                </div>
                    <div class="form-group">
                     <label for="intsbusca">INTSBUSCA</label>
                     <p class="form-control-static">{{$prova->intsbusca}}</p>
                </div>
                    <div class="form-group">
                     <label for="marcpessoasobj">MARCPESSOASOBJ</label>
                     <p class="form-control-static">{{$prova->marcpessoasobj}}</p>
                </div>
                    <div class="form-group">
                     <label for="inicpistas">INICPISTAS</label>
                     <p class="form-control-static">{{$prova->inicpistas}}</p>
                </div>
                    <div class="form-group">
                     <label for="ladrido">LADRIDO</label>
                     <p class="form-control-static">{{$prova->ladrido}}</p>
                </div>
                    <div class="form-group">
                     <label for="instdefesa">INSTDEFESA</label>
                     <p class="form-control-static">{{$prova->instdefesa}}</p>
                </div>
                    <div class="form-group">
                     <label for="tecnmordida">TECNMORDIDA</label>
                     <p class="form-control-static">{{$prova->tecnmordida}}</p>
                </div>
                    <div class="form-group">
                     <label for="qualidmordida">QUALIDMORDIDA</label>
                     <p class="form-control-static">{{$prova->qualidmordida}}</p>
                </div>
                    <div class="form-group">
                     <label for="combatluta">COMBATLUTA</label>
                     <p class="form-control-static">{{$prova->combatluta}}</p>
                </div>
                    <div class="form-group">
                     <label for="notafinal">NOTAFINAL</label>
                     <p class="form-control-static">{{$prova->notafinal}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('prova_binom_t_a_n_a_t2s.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection