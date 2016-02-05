@extends('layout')
@section('header') 
<div class="col-md-12">
    <div class="page-header">
        <h1>Ver Cão #{{$cao->num_matricula}} {{$cao->nome}}</h1>
        <form action="{{ route('caos.destroy', $cao->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="btn-group pull-left" role="group" aria-label="...">    
               <a class="btn btn-success" href="{{ route('criarProva' , array('tipoEntidade'=>'C', 'tipoProva'=>'TIP', 'entidade_id'=>$cao->id)) }}"><i class="glyphicon glyphicon-plus"></i> Criar Prova TIP</a>
               <a class="btn btn-success" href="{{ route('criarProva' , array('tipoEntidade'=>'C', 'tipoProva'=>'TANAT1', 'entidade_id'=>$cao->id)) }}"><i class="glyphicon glyphicon-plus"></i> Criar Prova TANAT1</a>
               <a class="btn btn-success" href="{{ route('criarProva' , array('tipoEntidade'=>'C', 'tipoProva'=>'PMORF', 'entidade_id'=>$cao->id)) }}"><i class="glyphicon glyphicon-plus"></i> Criar Prova PMORF</a>
           </div>

           <div class="btn-group pull-right" role="group" aria-label="...">
            <a class="btn btn-primary" href="{{ route('provasPorEntidade', array('tipoEntidade'=>'C', 'entidade_id'=>$cao->id)) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver Provas</a>
            <a class="btn btn-warning btn-group" role="group" href="{{ route('caos.edit', $cao->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
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
                   <label for="num_matricula">NÚMERO MATRÍCULA</label>
                   <p class="form-control-static">{{$cao->num_matricula}}</p>
               </div>
               <div class="form-group">
                   <label for="num_chip">NÚMERO CHIP</label>
                   <p class="form-control-static">{{$cao->num_chip}}</p>
               </div>

               <div class="form-group">
                   <label for="nomeCao">NOME</label>
                   <p class="form-control-static">{{$cao->nomeCao}}</p>
               </div>

               <div class="form-group">
                   <label for="raca">RAÇA</label>
                   <p class="form-control-static">{{$cao->raca}}</p>
               </div>
               <div class="form-group">
                   <label for="sexo">SEXO</label>
                   <p class="form-control-static">{{$cao->DescSexoCao}}</p>
               </div>
               <div class="form-group">
                   <label for="origem">ORIGEM</label>
                   <p class="form-control-static">{{$cao->NomeOrigem}}</p>
               </div>
               <div class="form-group">
                   <label for="unidade_id">UNIDADE</label>
                   <p class="form-control-static">{{$cao->NomeUnidade}}</p>
               </div>
               <div class="form-group">
                   <label for="data_nascim">DATA DE NASCIMENTO</label>
                   <p class="form-control-static">{{$cao->data_nascim}}</p>
               </div>

               <div class="form-group">
                   <label for="mae_nome">MÃE</label>
                   <p class="form-control-static">{{$cao->mae_nome}}</p>
               </div>

               <div class="form-group">
                   <label for="pai_nome">PAI</label>
                   <p class="form-control-static">{{$cao->pai_nome}}</p>
               </div>
               <div class="form-group">
                   <label for="ninhada">NINHADA</label>
                   <p class="form-control-static">{{$cao->ninhada}}</p>
               </div>
               <div class="form-group">
                   <label for="inativo">INATIVO</label>
                   <p class="form-control-static">{{$cao->NomeInativo}}</p>
               </div>
               <div class="form-group">
                   <label for="data_inativo">DATA DE INATIVAÇÃO</label>
                   <p class="form-control-static">{{$cao->data_inativo}}</p>
               </div>
               <div class="form-group">
                   <label for="data_ativo">DATA DE ATIVAÇÃO</label>
                   <p class="form-control-static">{{$cao->data_ativo}}</p>
               </div>
               <div class="form-group">
                   <label for="motivo_inativo">MOTIVO INATIVO</label>
                   <p class="form-control-static">{{$cao->NomeMotivoInativacao}}</p>
               </div>
               <div class="form-group">
                 <label for="observacoes">OBSERVAÇÕES</label>
                 <p class="form-control-static">{{$cao->observacoes}}</p>
             </div>
         </div>
     </form>
     <a class="btn btn-link" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i>   Voltar</a>
 </div>
</div>
@endsection