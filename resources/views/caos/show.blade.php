@extends('layout')
@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h1>Ver Cão #{{$cao->num_matricula}}</h1>
    <form action="{{ route('caos.destroy', $cao->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group pull-right" role="group" aria-label="...">
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
       <div class="col-md-3">
          <div class="form-group">
             <label for="num_matricula">NÚMERO MATRICULA</label>
             <p class="form-control-static">{{$cao->num_matricula}}</p>
         </div>
     </div>
     <div class="col-md-3">
       <div class="form-group">
         <label for="num_chip">NÚMERO CHIP</label>
         <p class="form-control-static">{{$cao->num_chip}}</p>
     </div>
 </div>
 <div class="col-md-3">
   <div class="form-group">
     <label for="nome">NOME</label>
     <p class="form-control-static">{{$cao->nome}}</p>
 </div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label for="raca">RAÇA</label>
     <p class="form-control-static">{{$cao->raca}}</p>
 </div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label for="sexo">SEXO</label>
     <p class="form-control-static">{{$cao->sexo}}</p>
 </div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label for="origem">ORIGEM</label>
     <p class="form-control-static">{{$cao->origem}}</p>
 </div>
</div>
<div class="col-md-4">
   <div class="form-group">
     <label for="data_nascim">DATA DE NASCIMENTO</label>
     <p class="form-control-static">{{$cao->data_nascim}}</p>
 </div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label for="mae">MÃE</label>
     <p class="form-control-static">{{$cao->mae}}</p>
 </div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label for="pai">PAI</label>
     <p class="form-control-static">{{$cao->pai}}</p>
 </div>
</div>
<div class="col-md-6">
   <div class="form-group">
     <label for="ninhada">NINHADA</label>
     <p class="form-control-static">{{$cao->ninhada}}</p>
 </div>
</div>
<div class="form-group">
   <label for="fotografia">FOTOGRAFIA</label>
   <p class="form-control-static">{{$cao->fotografia}}</p>
</div>
<div class="form-group">
   <label for="tamanhoimagem">TAMANHOIMAGEM</label>
   <p class="form-control-static">{{$cao->tamanhoimagem}}</p>
</div>
<div class="form-group">
   <label for="tipoimagem">TIPOIMAGEM</label>
   <p class="form-control-static">{{$cao->tipoimagem}}</p>
</div>

<div class="col-md-6">
   <div class="form-group">
     <label for="inativo">INATIVO</label>
     <p class="form-control-static">{{$cao->inativo}}</p>
 </div>
</div>
<div class="col-md-6">
   <div class="form-group">
     <label for="data_inativo">DATA DE INATIVAÇÃO</label>
     <p class="form-control-static">{{$cao->data_inativo}}</p>
 </div>
</div>
<div class="col-md-6">
   <div class="form-group">
     <label for="data_ativo">DATA DE ATIVAÇÃO</label>
     <p class="form-control-static">{{$cao->data_ativo}}</p>
 </div>
</div>
<div class="col-md-6">
   <div class="form-group">
     <label for="motivo_inativo">MOTIVO DE INATIVAÇÃO</label>
     <p class="form-control-static">{{$cao->motivo_inativo}}</p>
 </div>
</div>
<div class="col-md-6">
   <div class="form-group">
     <label for="observacoes">OBSERVAÇÕES</label>
     <p class="form-control-static">{{$cao->observacoes}}</p>
 </div>
</div>
<div class="col-md-12">
    <div class="form-group">
      <label for="motivo_inativo">PROVAS DO CÃO</label>
      <?php /*<a class="btn btn-link" href="{{ route('prova_*.show', $prova_*->id) }}"> Prova Tiro</a> */?>
      <a class="btn btn-link" href="{{ route('caos.index') }}"> Medição de Parâmetros Morfológicos</a> 
      <a class="btn btn-link" href="{{ route('caos.index') }}"> Teste Inicial de Personalidade</a>
  </div>
</div>

<div class="col-md-12">
    <div class="well well-sm">
       <a class="btn btn-link" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
   </div>
</div>

{!! Form::close() !!}
</div>
</div>

@endsection