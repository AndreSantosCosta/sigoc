@extends('layout')
 
@section('header')
<div class="col-md-12">
    <div class="page-header clearfix">
  
    <?php if(!isset($descricaoEntidade)){ ?>
        <h1><i class="glyphicon glyphicon-align-justify"></i> Provas </h1>
        <div class="btn-group pull-left" role="group" aria-label="...">
        <a class="btn btn-primary" href="{{ route('prova_militar_tiros.index') }}">Provas Tiro</a>
        <a class="btn btn-primary" href="{{ route('prova_cao_t_i_pers.index') }}">Provas TIP</a>
        <a class="btn btn-primary" href="{{ route('prova_binom_t_a_n_a_t2s.index') }}">Provas TANAT2</a>
        </div>
        <?php } else { ?>
        <h1><i class="glyphicon glyphicon-align-justify"></i> Provas {{$descricaoEntidade}} </h1>
    <?php } ?>
   
   </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($provas->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                        <th>Tipo de Prova</th>
                        <th>Entidade</th>
                        <th>Identificação Numero</th>
                        <th>Identificação Nome</th>
                        <th>Data de Prova</th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($provas as $prova)
                            <tr>
                            <td>{{$prova->tipoProva}}</td>
                    <td>{{$prova->NomeEntidade}}</td>
                    <td><a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></td>
                    <td><a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NomeIdentificacao}}</a></td>
                    <td>{{$prova->dataProva}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('prova', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver </a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('editarProva', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-edit"></i> Editar </a>
                                    <form action="{{ route('provas.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
                {!! $provas->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazio!</h3>
            @endif

        </div>
    </div>

@endsection