@extends('layout')
@section('header')
<div class="col-md-12">
<div class="page-header">
        <h1>Ver Prova TANAT2 Binomio #<a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></h1>
        <form action="{{ route('prova_binom_t_a_n_a_t2s.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('editarProva', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
  </div>
@endsection 

@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="dataProva">DATA PROVA</label>
                     <p class="form-control-static">{{$prova->dataProva}}</p>
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
                     <label for="memoriaMuscular">MEMORIA MUSCULAR</label>
                     <p class="form-control-static">{{$prova->memoriaMuscular}}</p>
                </div>
                    <div class="form-group">
                     <label for="agilidadeConfianca">AGILIDADE E CONFIANCA</label>
                     <p class="form-control-static">{{$prova->agilidadeConfianca}}</p>
                </div>
                    <div class="form-group">
                     <label for="rPisosSons">REAÇÃO PISOS SONS</label>
                     <p class="form-control-static">{{$prova->rPisosSons}}</p>
                </div>
                    <div class="form-group">
                     <label for="rAproxVulto">REAÇÃO APROXIMAÇÃO VULTO</label>
                     <p class="form-control-static">{{$prova->rAproxVulto}}</p>
                </div>
                    <div class="form-group">
                     <label for="rDisparos">REAÇÃO DISPAROS</label>
                     <p class="form-control-static">{{$prova->rDisparos}}</p>
                </div>
                    <div class="form-group">
                     <label for="instPresaPerist">INSTINTO PRESA PERSISTENCIA</label>
                     <p class="form-control-static">{{$prova->instPresaPerist}}</p>
                </div>
                    <div class="form-group">
                     <label for="intsBusca">INTENSIDADE BUSCA</label>
                     <p class="form-control-static">{{$prova->intsBusca}}</p>
                </div>
                    <div class="form-group">
                     <label for="marcPessoasObj">MARCAÇÃO PESSOAS OBJETOS</label>
                     <p class="form-control-static">{{$prova->marcPessoasObj}}</p>
                </div>
                    <div class="form-group">
                     <label for="inicPistas">INICIAÇÃO PISTAS</label>
                     <p class="form-control-static">{{$prova->inicPistas}}</p>
                </div>
                    <div class="form-group">
                     <label for="ladrido">LADRIDO</label>
                     <p class="form-control-static">{{$prova->ladrido}}</p>
                </div>
                    <div class="form-group">
                     <label for="instDefesa">INSTINTO DEFESA</label>
                     <p class="form-control-static">{{$prova->instDefesa}}</p>
                </div>
                    <div class="form-group">
                     <label for="tecnMordida">TECNICA MORDIDA</label>
                     <p class="form-control-static">{{$prova->tecnMordida}}</p>
                </div>
                    <div class="form-group">
                     <label for="qualidMordida">QUALIDADE MORDIDA</label>
                     <p class="form-control-static">{{$prova->qualidMordida}}</p>
                </div>
                    <div class="form-group">
                     <label for="CombatLuta">COMBATIVIDADE LUTA</label>
                     <p class="form-control-static">{{$prova->CombatLuta}}</p>
                </div>
                    <div class="form-group">
                     <label for="notaFinal">NOTA FINAL</label>
                     <p class="form-control-static">{{$prova->notaFinal}}</p>
                </div>
                 <div class="form-group">
                     <label for="arquivo">ARQUIVO</label>
                     <p class="form-control-static">{{$prova->arquivo}}</p>
                </div>
                 <div class="form-group">
                     <label for="observacoes">OBSERVAÇÕES</label>
                     <p class="form-control-static">{{$prova->observacoes}}</p>
                </div>
               
            </form>

            <a class="btn btn-link" href="{{ route('prova_binom_t_a_n_a_t2s.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

        </div>
    </div>
  </div>
@endsection