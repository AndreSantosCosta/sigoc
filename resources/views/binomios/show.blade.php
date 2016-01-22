@extends('layout')
@section('header')
<div class="col-md-12">
<div class="page-header"> 
    <h1>Ver Binomio # <a href="{{ route('militars.show', $binomio->militar_id) }}">{{$binomio->NumMecanog}}</a> + <a href="{{ route('caos.show', $binomio->cao_id) }}">{{$binomio->NumMatricula}}</a></h1>
    <form action="{{ route('binomios.destroy', $binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="btn-group pull-right" role="group" aria-label="...">
        <a class="btn btn-primary" href="{{ route('provasPorEntidade', array('tipoEntidade'=>'B', 'entidade_id'=>$binomio->id)) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver Provas</a>
            <a class="btn btn-warning btn-group" role="group" href="{{ route('binomios.edit', $binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
        </div>
      </form>
    </div>
</div> 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <form action="#">
           <div class="col-md-12">
                <div class="form-group">
                   <label for="data_inicio">DATA DE INICIO</label>
                   <p class="form-control-static">{{$binomio->data_inicio}}</p>
               </div>

               <div class="form-group">
                   <label for="nome">NOME</label>
                   <p class="form-control-static"><a href="{{ route('militars.show', $binomio->militar_id) }}">{{$binomio->NomeMilitar}}</a> + <a href="{{ route('caos.show', $binomio->cao_id) }}">{{$binomio->NomeCao}}</a></p>
               </div>
               <div class="form-group">
                   <label for="numero">NUMERO</label>
                   <p class="form-control-static"><a href="{{ route('militars.show', $binomio->militar_id) }}">{{$binomio->NumMecanog}}</a> + <a href="{{ route('caos.show', $binomio->cao_id) }}">{{$binomio->NumMatricula}}</a></p>
               </div>
               
               <div class="form-group">
                   <label for="vertente">VERTENTE</label>
                   <p class="form-control-static">{{$binomio->NomeVertente}}</p>
               </div>
               <div class="form-group">
                 <label for="unidade_id">UNIDADE</label>
                 <p class="form-control-static">{{$binomio->NomeUnidade}}</p>
             </div>
              <div class="form-group">
               <label for="inativo">INATIVO</label>
               <p class="form-control-static">{{$binomio->NomeInativo}}</p>
           </div>
           <div class="form-group">
               <label for="data_inativo">DATA DE INATIVAÇÃO</label>
               <p class="form-control-static">{{$binomio->data_inativo}}</p>
           </div>
           <div class="form-group">
               <label for="data_ativo">DATA DE ATIVAÇÃO</label>
               <p class="form-control-static">{{$binomio->data_ativo}}</p>
           </div>
             <div class="form-group">
               <label for="motivo_inativo">MOTIVO DE INATIVAÇÃO</label>
               <p class="form-control-static">{{$binomio->motivo_inativo}}</p>
           </div>
            <div class="form-group">
               <label for="observacoes">OBSERVAÇÕES</label>
               <p class="form-control-static">{{$binomio->observacoes}}</p>
           </div>
           
       </form>

       <a class="btn btn-link" href="{{ route('binomios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>

   </div>
</div>

@endsection