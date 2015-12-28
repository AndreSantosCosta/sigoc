
<div class="row">
    <div class="col-md-12">
        @if($militars->count())
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    
                    <th>Número Mecanográfico</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Identificação</th>
                    <th>Posto</th>
                    <th>Unidade</th>
                    <th>Inativo</th>
                    <th class="text-right">Opções</th>
                </tr>
            </thead>

            <tbody>
                @foreach($militars as $militar)
                <tr>
                    <td>{{$militar->num_mecanografico}}</td>
                    <td>{{$militar->nomeProprio}}</td>
                    <td>{{$militar->apelido}}</td>
                    <td>{{$militar->nome}}</td>
                    <td>{{$militar->nomePosto}}</td>
                    <td>{{$militar->nomeUnidade}}</td>
                    <td>{{$militar->NomeInativo}}</td>
                    <td class="text-right">
                        <a class="btn btn-xs btn-primary" href="{{ route('militars.show', $militar->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                        <a class="btn btn-xs btn-warning" href="{{ route('militars.edit', $militar->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                        <form action="{{ route('militars.destroy', $militar->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $militars->render() !!}
        @else
        <h3 class="text-center alert alert-info">Vazio!</h3>
        @endif

    </div>
</div>

@endsection