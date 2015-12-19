@extends('layout')
@section('header')
<div class="page-header">
  <div class="col-md-12">
    <h1>Ver Binomio #{{$binomio->id}}</h1>
    <form action="{{ route('binomios.destroy', $binomio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="btn-group pull-right" role="group" aria-label="...">
            <a class="btn btn-warning btn-group" role="group" href="{{ route('binomios.edit', $binomio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <button type="submit" class="btn btn-danger">Apagar <i class="glyphicon glyphicon-trash"></i></button>
        </div>
    </div>
</form>

</div> 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <form action="#">
           <div class="col-md-12">
                <!-- <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div> -->
                <div class="form-group">
                   <label for="data_inicio">DATA DE INICIO</label>
                   <p class="form-control-static">{{$binomio->data_inicio}}</p>
               </div>

               <div class="form-group">
                   <label for="nome">NOME</label>
                   <p class="form-control-static">{{$binomio->NomeMilitar . " + " . $binomio->NomeCao}}</p>
               </div>
               <div class="form-group">
                   <label for="numero">NUMERO</label>
                   <p class="form-control-static">{{$binomio->NumMecanog . " + " . $binomio->NumMatricula}}</p>
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
               <p class="form-control-static">{{$binomio->inativo}}</p>
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