@extends('layout')
 
@section('header')
<div class="col-md-12">
  <div class="page-header">
  <h1><i class="glyphicon glyphicon-edit"></i> Editar Cão #{{$cao->num_matricula}}</h1>
  </div>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
{!! Form::model($cao, array('route' => array( 'caos.update', $cao->id), 'method' =>'PUT')) !!}
    
    <div class="col-md-3">
      <div class="form-group @if($errors->has('num_matricula')) has-error @endif">
        {!! Form::label('num_matricula', 'Número Matricula') !!}
        {!! Form::text('num_matricula',$cao->num_matricula, array('class'=>'form-control')) !!}
        @if($errors->has("num_matricula"))
        <span class="help-block">{{ $errors->first("num_matricula") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('num_chip')) has-error @endif">
        {!! Form::label('num_chip', 'Número Chip') !!}
        {!! Form::text('num_chip',$cao->num_chip, array('class'=>'form-control')) !!}
        @if($errors->has("num_chip"))
        <span class="help-block">{{ $errors->first("num_chip") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('nome')) has-error @endif">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome',$cao->nome, array('class'=>'form-control')) !!}
        @if($errors->has("nome"))
        <span class="help-block">{{ $errors->first("nome") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('raca')) has-error @endif">
        {!! Form::label('raca', 'Raça') !!}
        {!! Form::text('raca',$cao->raca, array('class'=>'form-control')) !!}
        @if($errors->has("raca"))
        <span class="help-block">{{ $errors->first("raca") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('sexo')) has-error @endif">
        {!! Form::label('sexo', 'Sexo') !!}
        {!! Form::select('sexo', $listaSexo, $cao->sexo, array('class'=>'form-control')) !!}
        @if($errors->has("sexo"))
        <span class="help-block">{{ $errors->first("sexo") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('origem')) has-error @endif">
        {!! Form::label('origem', 'Origem') !!}
        {!! Form::select('origem', $listaOrigem, $cao->origem, array('class'=>'form-control')) !!}
        @if($errors->has("origem"))
        <span class="help-block">{{ $errors->first("origem") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
        {!! Form::label('data_nascim', 'Data de Nascimento') !!}
        {!! Form::date('data_nascim',$cao->data_nascim, array('class'=>'form-control')) !!}
        @if($errors->has("data_nascim"))
        <span class="help-block">{{ $errors->first("data_nascim") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group @if($errors->has('mae')) has-error @endif">
        {!! Form::label('mae', 'Mãe') !!}
        {!! Form::text('mae',$cao->mae, array('class'=>'form-control')) !!}
        @if($errors->has("mae"))
        <span class="help-block">{{ $errors->first("mae") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group @if($errors->has('pai')) has-error @endif">
        {!! Form::label('pai', 'Pai') !!}
        {!! Form::text('pai', $cao->pai, array('class'=>'form-control')) !!}
        @if($errors->has("pai"))
        <span class="help-block">{{ $errors->first("pai") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group @if($errors->has('ninhada')) has-error @endif">
        {!! Form::label('ninhada', 'Ninhada') !!}
        {!! Form::text('ninhada',$cao->ninhada, array('class'=>'form-control')) !!}
        @if($errors->has("ninhada"))
        <span class="help-block">{{ $errors->first("ninhada") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group @if($errors->has('inativo')) has-error @endif">
        {!! Form::label('inativo', 'Inativo') !!}
        {!! Form::checkbox('inativo', $cao->inativo, array('class'=>'form-control')) !!}
        @if($errors->has("inativo"))
        <span class="help-block">{{ $errors->first("inativo") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
        {!! Form::label('data_inativo', 'Data de Inativação') !!}
        {!! Form::date('data_inativo', $cao->data_inativo, array('class'=>'form-control')) !!}
        @if($errors->has("data_inativo"))
        <span class="help-block">{{ $errors->first("data_inativo") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
        {!! Form::label('motivo_inativo', 'Motivo de Inativação') !!}
        {!! Form::select('motivo_inativo', $listaMotivos, $cao->motivo_inativo, array('class'=>'form-control')) !!}
        @if($errors->has("motivo_inativo"))
        <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group @if($errors->has('observacoes')) has-error @endif">
        {!! Form::label('observacoes', 'Observações') !!}
        {!! Form::text('observacoes',$cao->observacao, array('class'=>'form-control')) !!}
        @if($errors->has("observacoes")) 
        <span class="help-block">{{ $errors->first("observacoes") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-12">
      <div class="well well-sm">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <?php /*{!! Form::submit('Criar', '', array('class'=>'btn btn-primary')) !!} */?>
        <a class="btn btn-link pull-right" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
      </div>
    </div>
    {!! Form::close() !!}

<?php /*
    <form action="{{ route('caos.update', $cao->id) }}" method="POST">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group @if($errors->has('num_matricula')) has-error @endif">
       <label for="num_matricula-field">Num_matricula</label>
       <input type="text" id="num_matricula-field" name="num_matricula" class="form-control" value="{{ $cao->num_matricula }}"/>
       @if($errors->has("num_matricula"))
       <span class="help-block">{{ $errors->first("num_matricula") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('num_chip')) has-error @endif">
       <label for="num_chip-field">Num_chip</label>
       <input type="text" id="num_chip-field" name="num_chip" class="form-control" value="{{ $cao->num_chip }}"/>
       @if($errors->has("num_chip"))
       <span class="help-block">{{ $errors->first("num_chip") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('nome')) has-error @endif">
       <label for="nome-field">Nome</label>
       <input type="text" id="nome-field" name="nome" class="form-control" value="{{ $cao->nome }}"/>
       @if($errors->has("nome"))
       <span class="help-block">{{ $errors->first("nome") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('raca')) has-error @endif">
       <label for="raca-field">Raca</label>
       <input type="text" id="raca-field" name="raca" class="form-control" value="{{ $cao->raca }}"/>
       @if($errors->has("raca"))
       <span class="help-block">{{ $errors->first("raca") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('sexo')) has-error @endif">
       <label for="sexo-field">Sexo</label>
       <input type="text" id="sexo-field" name="sexo" class="form-control" value="{{ $cao->sexo }}"/>
       @if($errors->has("sexo"))
       <span class="help-block">{{ $errors->first("sexo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('origem')) has-error @endif">
       <label for="origem-field">Origem</label>
       <input type="text" id="origem-field" name="origem" class="form-control" value="{{ $cao->origem }}"/>
       @if($errors->has("origem"))
       <span class="help-block">{{ $errors->first("origem") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
       <label for="data_nascim-field">Data_nascim</label>
       <input type="text" id="data_nascim-field" name="data_nascim" class="form-control" value="{{ $cao->data_nascim }}"/>
       @if($errors->has("data_nascim"))
       <span class="help-block">{{ $errors->first("data_nascim") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('mae')) has-error @endif">
       <label for="mae-field">Mae</label>
       <input type="text" id="mae-field" name="mae" class="form-control" value="{{ $cao->mae }}"/>
       @if($errors->has("mae"))
       <span class="help-block">{{ $errors->first("mae") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('pai')) has-error @endif">
       <label for="pai-field">Pai</label>
       <input type="text" id="pai-field" name="pai" class="form-control" value="{{ $cao->pai }}"/>
       @if($errors->has("pai"))
       <span class="help-block">{{ $errors->first("pai") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('ninhada')) has-error @endif">
       <label for="ninhada-field">Ninhada</label>
       <input type="text" id="ninhada-field" name="ninhada" class="form-control" value="{{ $cao->ninhada }}"/>
       @if($errors->has("ninhada"))
       <span class="help-block">{{ $errors->first("ninhada") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('inativo')) has-error @endif">
       <label for="inativo-field">Inativo</label>
       <input type="text" id="inativo-field" name="inativo" class="form-control" value="{{ $cao->inativo }}"/>
       @if($errors->has("inativo"))
       <span class="help-block">{{ $errors->first("inativo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('data_inativo')) has-error @endif">
       <label for="data_inativo-field">Data_inativo</label>
       <input type="text" id="data_inativo-field" name="data_inativo" class="form-control" value="{{ $cao->data_inativo }}"/>
       @if($errors->has("data_inativo"))
       <span class="help-block">{{ $errors->first("data_inativo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
       <label for="motivo_inativo-field">Motivo_inativo</label>
       <input type="text" id="motivo_inativo-field" name="motivo_inativo" class="form-control" value="{{ $cao->motivo_inativo }}"/>
       @if($errors->has("motivo_inativo"))
       <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('observacoes')) has-error @endif">
       <label for="observacoes-field">Observacoes</label>
       <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $cao->observacoes }}</textarea>
       @if($errors->has("observacoes"))
       <span class="help-block">{{ $errors->first("observacoes") }}</span>
       @endif
     </div>
     <div class="well well-sm">
      <button type="submit" class="btn btn-primary">Save</button>
      <a class="btn btn-link pull-right" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
    </div>
  </form>
*/?>
</div>
</div>
@endsection