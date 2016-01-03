<div class="row">
    <div class="col-md-12">
        @if($binomios->count())
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Numero Mecanográfico</th>
                    <th>Número Matricula</th>
                    <th>Identificação Nome</th>
                    <th>Identificação Numero</th>
                    <th>Data de Inicio</th>
                    <th>Vertente</th>
                    <th>Inativo</th>
                    <th class="text-right">Opções</th>
                </tr>
            </thead>

            <tbody>
                @foreach($binomios as $binomio)
                <tr>
                    <td>{{$binomio->numMecanog}}</td>
                    <td>{{$binomio->numMatricula}}</td>
                    <td>{{$binomio->nome}}</td>
                    <td>{{$binomio->numero}}</td>
                    <td>{{$binomio->data_inicio}}</td>
                    <td>{{$binomio->NomeVertente}}</td>
                    <td>{{$binomio->NomeInativo}}</td> 
                    <td class="text-right">
                        <a class="btn btn-xs btn-primary" href="{{ route('binomios.show', $binomio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                        <a class="btn btn-xs btn-warning" href="{{ route('binomios.edit', $binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                        <form action="{{ route('binomios.destroy', $binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $binomios->render() !!}
        @else
        <h3 class="text-center alert alert-info">Vazio!</h3>
        @endif

    </div>
</div>

@endsection