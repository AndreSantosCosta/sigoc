@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Provas
            <a class="btn btn-success pull-right" href="{{ route('provas.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($provas->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TIPOENTIDADE</th>
                        <th>TIPOPROVA</th>
                        <th>DATAPROVA</th>
                        <th>CAO_ID</th>
                        <th>MILITAR_ID</th>
                        <th>BINOMIO_ID</th>
                        <th>OBSERVACOES</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($provas as $prova)
                            <tr>
                                <td>{{$prova->id}}</td>
                                <td>{{$prova->tipoentidade}}</td>
                    <td>{{$prova->tipoprova}}</td>
                    <td>{{$prova->dataprova}}</td>
                    <td>{{$prova->cao_id}}</td>
                    <td>{{$prova->militar_id}}</td>
                    <td>{{$prova->binomio_id}}</td>
                    <td>{{$prova->observacoes}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('provas.show', $prova->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('provas.edit', $prova->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('provas.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $provas->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection