 @extends('layout')
@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1>Ver Militar #{{$militar->num_mecanografico}} {{$militar->nome}}</h1>
        <form action="{{ route('militars.destroy', $militar->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-success" href="{{ route('criarProva' , array('tipoEntidade'=>'M', 'entidade_id'=>$militar->id)) }}"><i class="glyphicon glyphicon-plus"></i> Criar Prova</a>
                <a class="btn btn-primary" href="{{ route('provasPorEntidade', array('tipoEntidade'=>'M', 'entidade_id'=>$militar->id)) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver Provas</a>
                <a class="btn btn-warning btn-group" role="group" href="{{ route('militars.edit', $militar->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
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
           <!--  <div class="form-group">
                <label for="nome">ID</label>
                <p class="form-control-static"></p>
            </div> -->
            <div class="form-group">
               <label for="num_mecanografico">NUMERO MECANOGRAFICO</label>
               <p class="form-control-static">{{$militar->num_mecanografico}}</p>
           </div>
           <!-- <div class="form-group">
               <label for="user_id">USER_ID</label>
               <p class="form-control-static">{{$militar->user_id}}</p>
           </div> -->
           <div class="form-group">
               <label for="posto_id">POSTO</label>
               <p class="form-control-static">{{$militar->NomePosto}}</p>
           </div>
           <div class="form-group">
               <label for="unidade_id">UNIDADE</label>
               <p class="form-control-static">{{$militar->NomeUnidade}}</p>
           </div>
           <div class="form-group">
               <label for="apelido">APELIDO</label>
               <p class="form-control-static">{{$militar->apelido}}</p>
           </div>
           <div class="form-group">
               <label for="nomeproprio">NOME PROPRIO</label>
               <p class="form-control-static">{{$militar->nomeProprio}}</p>
           </div>
           <div class="form-group">
               <label for="data_nascim">DATA DE NASCIMENTO</label>
               <p class="form-control-static">{{$militar->data_nascim}}</p>
           </div>
           <div class="form-group">
               <label for="grupo_sang">GRUPO SANGUINEO</label>
               <p class="form-control-static">{{$militar->grupo_sang}}</p>
           </div>
           <div class="form-group">
               <label for="sexo">SEXO</label>
               <p class="form-control-static">{{$militar->DescSexo}}</p>
           </div>
           <div class="form-group">
               <label for="inativo">INATIVO</label>
               <p class="form-control-static">{{$militar->NomeInativo}}</p>
           </div>
           <div class="form-group">
               <label for="data_inativo">DATA DE INATIVAÇÃO</label>
               <p class="form-control-static">{{$militar->data_inativo}}</p>
           </div>
           <div class="form-group">
               <label for="data_ativo">DATA DE ATIVAÇÃO</label>
               <p class="form-control-static">{{$militar->data_ativo}}</p>
           </div>
           <div class="form-group">
               <label for="motivo_inativo">MOTIVO INATIVO</label>
               <p class="form-control-static">{{$militar->NomeMotivoInativacao}}</p>
           </div>
            <div class="form-group">
               <label for="observacoes">OBSERVAÇÕES</label>
               <p class="form-control-static">{{$militar->observacoes}}</p>
           </div>
       </div>
   </form>
   <a class="btn btn-link" href="{{ route('militars.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
</div>
</div>
@endsection