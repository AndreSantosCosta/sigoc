@extends('layout')

@section('header')
    <div class="col-md-12">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Provas Tiro
       </h1>
    </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12"> 
            @if($prova_militar_tiros->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>Data de Prova</th> 
                            <th>Nº Mecanográfico</th>
                            <th>Nome Militar</th>
                            <th>Local</th>
                            <th>Tipo</th>
                            <th>Nota Final</th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_militar_tiros as $prova)
                            <tr>
                                <td>{{$prova->dataProva}}</td>
                                <td><a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></td>
                                <td>{{$prova->NomeIdentificacao}}</td>
                                <td>{{$prova->local}}</td>
                                <td>{{$prova->tipo}}</td>
                                <td>{{$prova->notaFinal}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('prova', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('editarProva', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    <form action="{{ route('prova_militar_tiros.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $prova_militar_tiros->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazio!</h3>
            @endif

        </div>
    </div>

@endsection