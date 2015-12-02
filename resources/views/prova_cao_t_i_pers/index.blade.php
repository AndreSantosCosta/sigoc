@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvaCaoTIPers
            <a class="btn btn-success pull-right" href="{{ route('prova_cao_t_i_pers.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_cao_t_i_pers->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>AVALIADOR</th>
                        <th>EXECUTANTE</th>
                        <th>LOCAL</th>
                        <th>SEGUIMENTO</th>
                        <th>LEVANTAR</th>
                        <th>SUBMISSAO</th>
                        <th>CHAMADA</th>
                        <th>BUSCAOBJ</th>
                        <th>JORNAL</th>
                        <th>CHAPEU</th>
                        <th>MESA</th>
                        <th>DOR</th>
                        <th>NOTAFINAL</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_cao_t_i_pers as $prova_cao_t_i_per)
                            <tr>
                                <td>{{$prova_cao_t_i_per->id}}</td>
                                <td>{{$prova_cao_t_i_per->avaliador}}</td>
                    <td>{{$prova_cao_t_i_per->executante}}</td>
                    <td>{{$prova_cao_t_i_per->local}}</td>
                    <td>{{$prova_cao_t_i_per->seguimento}}</td>
                    <td>{{$prova_cao_t_i_per->levantar}}</td>
                    <td>{{$prova_cao_t_i_per->submissao}}</td>
                    <td>{{$prova_cao_t_i_per->chamada}}</td>
                    <td>{{$prova_cao_t_i_per->buscaobj}}</td>
                    <td>{{$prova_cao_t_i_per->jornal}}</td>
                    <td>{{$prova_cao_t_i_per->chapeu}}</td>
                    <td>{{$prova_cao_t_i_per->mesa}}</td>
                    <td>{{$prova_cao_t_i_per->dor}}</td>
                    <td>{{$prova_cao_t_i_per->notafinal}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('prova_cao_t_i_pers.show', $prova_cao_t_i_per->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('prova_cao_t_i_pers.edit', $prova_cao_t_i_per->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('prova_cao_t_i_pers.destroy', $prova_cao_t_i_per->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $prova_cao_t_i_pers->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection