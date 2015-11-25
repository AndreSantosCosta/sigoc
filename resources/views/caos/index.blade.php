@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Caos
            <a class="btn btn-success pull-right" href="{{ route('caos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($caos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NUM_MATRICULA</th>
                        <th>NUM_CHIP</th>
                        <th>NOME</th>
                        <th>RACA</th>
                        <th>SEXO</th>
                        <th>ORIGEM</th>
                        <th>DATA_NASCIM</th>
                        <th>MAE</th>
                        <th>PAI</th>
                        <th>NINHADA</th>
                        <th>FOTOGRAFIA</th>
                        <th>TAMANHOIMAGEM</th>
                        <th>TIPOIMAGEM</th>
                        <th>INATIVO</th>
                        <th>DATA_INATIVO</th>
                        <th>DATA_ATIVO</th>
                        <th>MOTIVO_INATIVO</th>
                        <th>OBSERVACOES</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($caos as $cao)
                            <tr>
                                <td>{{$cao->id}}</td>
                                <td>{{$cao->num_matricula}}</td>
                    <td>{{$cao->num_chip}}</td>
                    <td>{{$cao->nome}}</td>
                    <td>{{$cao->raca}}</td>
                    <td>{{$cao->sexo}}</td>
                    <td>{{$cao->origem}}</td>
                    <td>{{$cao->data_nascim}}</td>
                    <td>{{$cao->mae}}</td>
                    <td>{{$cao->pai}}</td>
                    <td>{{$cao->ninhada}}</td>
                    <td>{{$cao->fotografia}}</td>
                    <td>{{$cao->tamanhoimagem}}</td>
                    <td>{{$cao->tipoimagem}}</td>
                    <td>{{$cao->inativo}}</td>
                    <td>{{$cao->data_inativo}}</td>
                    <td>{{$cao->data_ativo}}</td>
                    <td>{{$cao->motivo_inativo}}</td>
                    <td>{{$cao->observacoes}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('caos.show', $cao->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('caos.edit', $cao->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('caos.destroy', $cao->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $caos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection