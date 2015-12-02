@include('error')

<div class="row">
  <div class="col-md-12">

     {!! Form::model($cao, array('route' => array( 'caos.update', $cao->id), 'method' =>'PUT')) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                    <div class="form-group @if($errors->has('mae_id')) has-error @endif">
                       {!! Form::label('mae_id', 'Mãe ID') !!}
        {!! Form::text('mae_id',$cao->mae_id, array('class'=>'form-control')) !!}
                       @if($errors->has("mae_id"))
                        <span class="help-block">{{ $errors->first("mae_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mae_nome')) has-error @endif">
                        {!! Form::label('mae_nome', 'Mãe') !!}
        {!! Form::text('mae_nome',$cao->mae_nome, array('class'=>'form-control')) !!}
                       @if($errors->has("mae_nome"))
                        <span class="help-block">{{ $errors->first("mae_nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pai_id')) has-error @endif">
                       {!! Form::label('pai_id', 'Pai ID') !!}
        {!! Form::text('pai_id', $cao->pai_id, array('class'=>'form-control')) !!}
                       @if($errors->has("pai_id"))
                        <span class="help-block">{{ $errors->first("pai_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pai_nome')) has-error @endif">
                       {!! Form::label('pai_nome', 'Pai') !!}
        {!! Form::text('pai_nome', $cao->pai_nome, array('class'=>'form-control')) !!}
                       @if($errors->has("pai_nome"))
                        <span class="help-block">{{ $errors->first("pai_nome") }}</span>
                       @endif
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
    <div class="well well-sm">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <?php /*{!! Form::submit('Criar', '', array('class'=>'btn btn-primary')) !!} */?>
      <a class="btn btn-link pull-right" href="{{ route('caos.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar</a>
    </div>
  </div>
  {!! Form::close() !!}

</div>
</div>
@endsection