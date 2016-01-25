 <div class="row">
        <div class="col-md-12">
            @if($caos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                        <th>Número Matricula</th>
                        <th>Número Chip</th>
                        <th>Nome</th>
                        <th>Raça</th>
                        <th>Origem</th>
                        <th>Ninhada</th>
                        <th>Inativo</th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($caos as $cao)
                            <tr>
                    <td>{{$cao->num_matricula}}</td>
                    <td>{{$cao->num_chip}}</td>
                    <td>{{$cao->nome}}</td>
                    <td>{{$cao->raca}}</td>
                    <td>{{$cao->nomeOrigem}}</td>
                    <td>{{$cao->ninhada}}</td>
                    <td>{{$cao->NomeInativo}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('caos.show', $cao->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('caos.edit', $cao->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    <form action="{{ route('caos.destroy', $cao->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $caos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vazio!</h3>
            @endif

        </div>
    </div>

@endsection