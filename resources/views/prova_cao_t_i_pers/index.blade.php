@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Testes Iniciais de Personalidade
            <a class="btn btn-success pull-right" href="{{ route('prova_cao_t_i_pers.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
        </h1>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if($prova_cao_t_i_pers->count())
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Data de Prova</th>
                    <th>Nº Matricula</th>
                    <th>Avaliador</th>
                    <th>Executante</th>
                    <th>LOCAL</th>
                    <th>NOTAFINAL</th>
                    <th class="text-right"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($prova_cao_t_i_pers as $prova)
                <tr>
                    <td>{{$prova->dataProva}}</td>
                    <td><a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></td>
                    <td>{{$prova->avaliador}}</td>
                    <td>{{$prova->executante}}</td>
                    <td>{{$prova->local}}</td>
                    <td>{{$prova->notaFinal}}</td>
                    <td class="text-right">
                    <a class="btn btn-xs btn-primary" href="{{ route('prova', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                        <a class="btn btn-xs btn-warning" href="{{ route('editarProva', array('id'=>$prova->id)) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                        <form action="{{ route('prova_cao_t_i_pers.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $prova_cao_t_i_pers->render() !!}
        @else
        <h3 class="text-center alert alert-info">Vazio!</h3>
        @endif

    </div>
</div>

@endsection