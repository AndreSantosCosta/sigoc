@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Binomios
            <a class="btn btn-success pull-right" href="{{ route('binomios.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($binomios->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DATA_INICIO</th>
                        <th>NUM_MECANOGRAFICO</th>
                        <th>NUM_MATRICULA</th>
                        <th>VERTENTE</th>
                        <th>INATIVO</th>
                        <th>DATA_INATIVO</th>
                        <th>MOTIVO_INATIVO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($binomios as $binomio)
                            <tr>
                                <td>{{$binomio->id}}</td>
                                <td>{{$binomio->data_inicio}}</td>
                    <td>{{$binomio->num_mecanografico}}</td>
                    <td>{{$binomio->num_matricula}}</td>
                    <td>{{$binomio->vertente}}</td>
                    <td>{{$binomio->inativo}}</td>
                    <td>{{$binomio->data_inativo}}</td>
                    <td>{{$binomio->motivo_inativo}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('binomios.show', $binomio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('binomios.edit', $binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('binomios.destroy', $binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $binomios->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection