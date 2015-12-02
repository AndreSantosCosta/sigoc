 @include('error')

<div class="row">
 <div class="col-md-12">

    <!-- <form action="{{ route('militars.update', $militar->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT"> -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    {!! Form::model($militar, array('route' => array( 'militars.update', $militar->id ), 'method' =>'PUT')) !!}
    <div class="col-md-2">
      <div class="form-group @if($errors->has('num_mecanografico')) has-error @endif">
        {!! Form::label('num_mecanografico', 'Número Mecanográfico') !!}
        {!! Form::text('num_mecanografico', $militar->num_mecanografico, array('class'=>'form-control')) !!}
        @if($errors->has("num_mecanografico"))
        <span class="help-block">{{ $errors->first("num_mecanografico") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group @if($errors->has('nome')) has-error @endif">
        {!! Form::label('nome') !!}
        {!! Form::text('nome', $militar->nome, array('class'=>'form-control')) !!}
        @if($errors->has("nome"))
        <span class="help-block">{{ $errors->first("nome") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group @if($errors->has('apelido')) has-error @endif">
        {!! Form::label('apelido') !!}
        {!! Form::text('apelido', $militar->apelido, array('class'=>'form-control')) !!}
        @if($errors->has("apelido"))
        <span class="help-block">{{ $errors->first("apelido") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group @if($errors->has('data_nascim')) has-error @endif">
        {!! Form::label('data_nascim', 'Data de Nascimento') !!}
        {!! Form::date('data_nascim', $militar->data_nascim, array('class'=>'form-control')) !!}
        @if($errors->has("data_nascim"))
        <span class="help-block">{{ $errors->first("data_nascim") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group @if($errors->has('grupo_sang')) has-error @endif">
        {!! Form::label('grupo_sang', 'Grupo Sanguíneo') !!}
        {!! Form::select('grupo_sang', $gruposSang, $militar->grupo_sang, array('class'=>'form-control')) !!}
        @if($errors->has("grupo_sang"))
        <span class="help-block">{{ $errors->first("grupo_sang") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group @if($errors->has('sexo')) has-error @endif">
        {!! Form::label('sexo') !!}
        {!! Form::select('sexo', $listaSexo, $militar->sexo, array('class'=>'form-control')) !!}
        @if($errors->has("sexo"))
        <span class="help-block">{{ $errors->first("sexo") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group @if($errors->has('posto_id')) has-error @endif">
        {!! Form::label('posto_id', 'Posto') !!}
        {!! Form::select('posto_id', $listaPostos, $militar->posto_id, array('class'=>'form-control')) !!}
        @if($errors->has("posto_id"))
        <span class="help-block">{{ $errors->first("posto_id") }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group @if($errors->has('unidade_id')) has-error @endif">
        {!! Form::label('unidade_id', 'Unidade') !!}
        {!! Form::select('unidade_id', $listaUnidades, $militar->unidade_id, array('class'=>'form-control')) !!}
        @if($errors->has("unidade_id"))
        <span class="help-block">{{ $errors->first("unidade_id") }}</span>
        @endif
      </div>
    </div>

    <div class="col-md-8">
      <div class="form-group @if($errors->has('motivo_inativo')) has-error @endif">
        {!! Form::label('motivo_inativo', 'Motivo de Inativação') !!}
        {!! Form::select('motivo_inativo', $listaMotivos, $militar->motivo_inativo, array('class'=>'form-control')) !!}
        @if($errors->has("motivo_inativo"))
        <span class="help-block">{{ $errors->first("motivo_inativo") }}</span>
        @endif
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="well well-sm">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <?php /*{!! Form::submit('Guardar', '', array('class'=>'btn btn-primary')) !!} */?>
      <a class="btn btn-link pull-right" href="{{ route('militars.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
    </div>
  </div>
  {!! Form::close() !!}

</div>
</div>
@endsection