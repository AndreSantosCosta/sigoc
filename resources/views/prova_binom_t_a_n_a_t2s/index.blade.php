@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> ProvaBinomTANAT2s
            <a class="btn btn-success pull-right" href="{{ route('prova_binom_t_a_n_a_t2s.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($prova_binom_t_a_n_a_t2s->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IDPROVABINOMIO</th>
                        <th>DATA_NASCIM</th>
                        <th>AVALIADOR</th>
                        <th>LOCAL</th>
                        <th>ATITUTE</th>
                        <th>MEMORIAMUSCULAR</th>
                        <th>AGILIDADECONFIANCA</th>
                        <th>RPISOSSONS</th>
                        <th>RAPROXVULTO</th>
                        <th>RDISPAROS</th>
                        <th>INSTPRESAPERIST</th>
                        <th>INTSBUSCA</th>
                        <th>MARCPESSOASOBJ</th>
                        <th>INICPISTAS</th>
                        <th>LADRIDO</th>
                        <th>INSTDEFESA</th>
                        <th>TECNMORDIDA</th>
                        <th>QUALIDMORDIDA</th>
                        <th>COMBATLUTA</th>
                        <th>NOTAFINAL</th>
                        <th>OBSERVACOES</th>
                        <th>ARQUIVO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($prova_binom_t_a_n_a_t2s as $prova_binom_t_a_n_a_t2)
                            <tr>
                                <td>{{$prova_binom_t_a_n_a_t2->id}}</td>
                                <td>{{$prova_binom_t_a_n_a_t2->idprovabinomio}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->data_nascim}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->avaliador}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->local}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->atitute}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->memoriamuscular}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->agilidadeconfianca}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->rpisossons}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->raproxvulto}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->rdisparos}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->instpresaperist}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->intsbusca}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->marcpessoasobj}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->inicpistas}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->ladrido}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->instdefesa}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->tecnmordida}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->qualidmordida}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->combatluta}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->notafinal}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->observacoes}}</td>
                    <td>{{$prova_binom_t_a_n_a_t2->arquivo}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('prova_binom_t_a_n_a_t2s.show', $prova_binom_t_a_n_a_t2->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('prova_binom_t_a_n_a_t2s.edit', $prova_binom_t_a_n_a_t2->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('prova_binom_t_a_n_a_t2s.destroy', $prova_binom_t_a_n_a_t2->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $prova_binom_t_a_n_a_t2s->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection