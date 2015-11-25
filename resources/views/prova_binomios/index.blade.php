@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvaBinomios
            <a class="btn btn-success pull-right" href="{{ route('prova_binomios.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_binomios->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PROVA_ID</th>
                        <th>BINOMIO_ID</th>
                        <th>TIPOPROVA</th>
                        <th>DATAPROVA</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_binomios as $prova_binomio)
                            <tr>
                                <td>{{$prova_binomio->id}}</td>
                                <td>{{$prova_binomio->prova_id}}</td>
                    <td>{{$prova_binomio->binomio_id}}</td>
                    <td>{{$prova_binomio->tipoprova}}</td>
                    <td>{{$prova_binomio->dataprova}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('prova_binomios.show', $prova_binomio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('prova_binomios.edit', $prova_binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('prova_binomios.destroy', $prova_binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $prova_binomios->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection