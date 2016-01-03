@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Criar Prova</h1>
    </div>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('provas.store') }}" method="POST">
              <div class="col-md-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('tipoentidade')) has-error @endif">
                     <label for="tipoentidade-field">Entidade</label>
                     <select class="form-control" name="tipoentidade">
                       @foreach($listaEntidade as $chave => $valor)
                       <option value="{{$chave}}">{{$valor}}</option>
                       @endforeach
                     </select>
                     @if($errors->has("tipoentidade"))
                     <span class="help-block">{{ $errors->first("tipoentidade") }}</span>
                     @endif
                   </div>

              <!--   <div class="form-group @if($errors->has('tipoentidade')) has-error @endif">
                     <label for="tipoentidade-field">Entidade</label>
                  <input type="text" id="tipoentidade-field" name="tipoentidade" class="form-control" value="{{ old("tipoentidade") }}"/>
                     @if($errors->has("tipoentidade"))
                      <span class="help-block">{{ $errors->first("tipoentidade") }}</span>
                     @endif
                  </div> -->
                   <!--  <div class="form-group @if($errors->has('tipoprova')) has-error @endif">
                      <label for="tipoprova-field">Tipo de Prova</label>
                   <input type="text" id="tipoprova-field" name="tipoprova" class="form-control" value="{{ old("tipoprova") }}"/>
                      @if($errors->has("tipoprova"))
                       <span class="help-block">{{ $errors->first("tipoprova") }}</span>
                      @endif
                   </div> -->

                    <div class="form-group @if($errors->has('tipoprova')) has-error @endif">
                     <label for="tipoprova-field">Tipo de Prova</label>
                     <select class="form-control" name="tipoprova">
                       @foreach($listaTipoProva as $chave => $valor)
                       <option value="{{$chave}}">{{$valor}}</option>
                       @endforeach
                     </select>
                     @if($errors->has("tipoprova"))
                     <span class="help-block">{{ $errors->first("tipoprova") }}</span>
                     @endif
                   </div>

                    <!-- <div class="form-group @if($errors->has('dataprova')) has-error @endif">
                       <label for="dataprova-field">DataProva</label>
                    <input type="text" id="dataprova-field" name="dataprova" class="form-control" value="{{ old("dataprova") }}"/>
                       @if($errors->has("dataprova"))
                        <span class="help-block">{{ $errors->first("dataprova") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('entidade_id')) has-error @endif">
                       <label for="entidade_id-field">Entidade_id</label>
                    <input type="text" id="entidade_id-field" name="entidade_id" class="form-control" value="{{ old("entidade_id") }}"/>
                       @if($errors->has("entidade_id"))
                        <span class="help-block">{{ $errors->first("entidade_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <input type="text" id="arquivo-field" name="arquivo" class="form-control" value="{{ old("arquivo") }}"/>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observacoes</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ old("observacoes") }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div> -->
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Criar </button>
                    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i> Voltar </a>
                </div>
            </form>

        </div>
    </div>
@endsection