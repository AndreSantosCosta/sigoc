@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Prova Tiros
            <a class="btn btn-success pull-right" href="{{ route('prova_tiros.create') }}"><i class="glyphicon glyphicon-plus"></i> Criar</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_tiros->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PROVA_ID</th>
                        <th>DATA_PROVA</th>
                        <th>NUM_MECANOGRAFICO</th>
                        <th>LOCAL</th>
                        <th>TIPO</th>
                        <th>NOTA_FINAL</th>
                        <th>ARQUIVO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_tiros as $prova_tiro)
                            <tr>
                                <td>{{$prova_tiro->id}}</td>
                                <td>{{$prova_tiro->prova_id}}</td>
                    <td>{{$prova_tiro->data_prova}}</td>
                    <td>{{$prova_tiro->num_mecanografico}}</td>
                    <td>{{$prova_tiro->local}}</td>
                    <td>{{$prova_tiro->tipo}}</td>
                    <td>{{$prova_tiro->nota_final}}</td>
                    <td>{{$prova_tiro->arquivo}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('prova_tiros.show', $prova_tiro->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('prova_tiros.edit', $prova_tiro->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('prova_tiros.destroy', $prova_tiro->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $prova_tiros->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection