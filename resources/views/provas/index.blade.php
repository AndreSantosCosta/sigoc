@extends('layout')
 
@section('header')
<div class="col-md-12">
    <div class="page-header clearfix">
  
    <?php if(!isset($descricaoEntidade)){ ?>
        <h1><i class="glyphicon glyphicon-align-justify"></i> Provas </h1>
        <?php } else { ?>
        <h1><i class="glyphicon glyphicon-align-justify"></i> Provas {{$descricaoEntidade}} </h1>
    <?php } ?>
    <a class="btn btn-success pull-right" href="{{ route('provas.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar </a>  
   
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
                            <th class="text-right">Opções</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($provas as $prova)
                            <tr>
                            <td>{{$prova->tipoProva}}</td>
                    <td>{{$prova->NomeEntidade}}</td>
                    <td>{{$prova->NumIdentificacao}}</td>
                    <td>{{$prova->NomeIdentificacao}}</td>
                    <td>{{$prova->dataProva}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('prova', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver </a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('provas.edit', $prova->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar </a>
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