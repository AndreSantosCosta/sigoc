<div class="row">
    <div class="col-md-12">
        @if($provas->count())
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Prova</th>
                    <th>Data de Prova</th>
                    <th>Número Mecanográfico</th>
                    <th>Número Matricula</th>
                    <th class="text-right">Opções</th>
                </tr>
            </thead>

            <tbody>
                @foreach($provas as $prova)
                <tr>
                    <td>{{$prova->tipo_prova}}</td>
                    <td>{{$prova->data_prova}}</td>
                   <!--  <td>{{$prova->numMecanog}}</td>
                   <td>{{$prova->numMatricula}}</td> -->
                    <td class="text-right">
                        <a class="btn btn-xs btn-primary" href="{{ route('provas.show', $prova->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                        <a class="btn btn-xs btn-warning" href="{{ route('provas.edit', $prova->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                        <form action="{{ route('provas.destroy', $prova->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $provas->render() !!}
        @else
        <h3 class="text-center alert alert-info">Vazio!</h3>
        @endif

    </div>
</div>

@endsection