@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Militars
            <a class="btn btn-success pull-right" href="{{ route('militars.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($militars->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NUM_MECANOGRAFICO</th>
                        <th>USER_ID</th>
                        <th>POSTO_ID</th>
                        <th>APELIDO</th>
                        <th>NOME</th>
                        <th>DATA_NASCIM</th>
                        <th>GRUPO_SANG</th>
                        <th>SEXO</th>
                        <th>UNIDADE_ID</th>
                        <th>FOTOGRAFIA</th>
                        <th>TAMANHOIMAGEM</th>
                        <th>TIPOIMAGEM</th>
                        <th>INATIVO</th>
                        <th>DATA_INATIVO</th>
                        <th>DATA_ATIVO</th>
                        <th>MOTIVO_INATIVO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($militars as $militar)
                            <tr>
                                <td>{{$militar->id}}</td>
                                <td>{{$militar->num_mecanografico}}</td>
                    <td>{{$militar->user_id}}</td>
                    <td>{{$militar->posto_id}}</td>
                    <td>{{$militar->apelido}}</td>
                    <td>{{$militar->nome}}</td>
                    <td>{{$militar->data_nascim}}</td>
                    <td>{{$militar->grupo_sang}}</td>
                    <td>{{$militar->sexo}}</td>
                    <td>{{$militar->unidade_id}}</td>
                    <td>{{$militar->fotografia}}</td>
                    <td>{{$militar->tamanhoimagem}}</td>
                    <td>{{$militar->tipoimagem}}</td>
                    <td>{{$militar->inativo}}</td>
                    <td>{{$militar->data_inativo}}</td>
                    <td>{{$militar->data_ativo}}</td>
                    <td>{{$militar->motivo_inativo}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('militars.show', $militar->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('militars.edit', $militar->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('militars.destroy', $militar->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $militars->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection