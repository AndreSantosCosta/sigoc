<?php
use App\User;
?>

@extends('layout')

@section('header')
<div class="col-md-12">
    <div class="page-header">
    
        <h1><i class="glyphicon glyphicon-edit"></i> Editar Teste Inicial de Personalidade Cão #<a href="{{ route('goEntidade', array('id'=>$prova->entidade_id)) }}">{{$prova->NumIdentificacao}}</a></h1>
    </div>
     </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
    <div class="col-md-12">
        <div class="col-md-12">

            <form action="{{ route('prova_cao_t_i_pers.update', $prova->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <div class="form-group @if($errors->has('dataProva')) has-error @endif">
                       <label for="dataProva-field">Data de Prova</label>
                    <input type="date" id="dataProva-field" name="dataProva" class="form-control" value="{{ $prova->dataProva }}"/>
                       @if($errors->has("dataProva"))
                        <span class="help-block">{{ $errors->first("dataProva") }}</span>
                       @endif
                    </div>

                <div class="form-group @if($errors->has('avaliador')) has-error @endif">
                       <label for="avaliador-field">Avaliador</label>
                    <input type="text" id="avaliador-field" name="avaliador" class="form-control" value="{{ $prova->avaliador }}"/>
                       @if($errors->has("avaliador"))
                        <span class="help-block">{{ $errors->first("avaliador") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('executante')) has-error @endif">
                       <label for="executante-field">Executante</label>
                    <input type="text" id="executante-field" name="executante" class="form-control" value="{{ $prova->executante }}"/>
                       @if($errors->has("executante"))
                        <span class="help-block">{{ $errors->first("executante") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local')) has-error @endif">
                       <label for="local-field">Local</label>
                    <input type="text" id="local-field" name="local" class="form-control" value="{{ $prova->local }}"/>
                       @if($errors->has("local"))
                        <span class="help-block">{{ $errors->first("local") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('seguimento')) has-error @endif">
                       <label for="seguimento-field">Seguimento</label>
                    <input type="text" id="seguimento-field" name="seguimento" class="form-control" value="{{ $prova->seguimento }}"/>
                       @if($errors->has("seguimento"))
                        <span class="help-block">{{ $errors->first("seguimento") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('levantar')) has-error @endif">
                       <label for="levantar-field">Levantar</label>
                    <input type="text" id="levantar-field" name="levantar" class="form-control" value="{{ $prova->levantar }}"/>
                       @if($errors->has("levantar"))
                        <span class="help-block">{{ $errors->first("levantar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('submissao')) has-error @endif">
                       <label for="submissao-field">Submissão</label>
                    <input type="text" id="submissao-field" name="submissao" class="form-control" value="{{ $prova->submissao }}"/>
                       @if($errors->has("submissao"))
                        <span class="help-block">{{ $errors->first("submissao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('chamada')) has-error @endif">
                       <label for="chamada-field">Chamada</label>
                    <input type="text" id="chamada-field" name="chamada" class="form-control" value="{{ $prova->chamada }}"/>
                       @if($errors->has("chamada"))
                        <span class="help-block">{{ $errors->first("chamada") }}</span>
                       @endif
                    </div> 
                    <div class="form-group @if($errors->has('buscaObj')) has-error @endif">
                       <label for="buscaObj-field">Busca Objeto</label>
                    <input type="text" id="buscaObj-field" name="buscaObj" class="form-control" value="{{ $prova->buscaObj }}"/>
                       @if($errors->has("buscaObj"))
                        <span class="help-block">{{ $errors->first("buscaObj") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('jornal')) has-error @endif">
                       <label for="jornal-field">Jornal</label>
                    <input type="text" id="jornal-field" name="jornal" class="form-control" value="{{ $prova->jornal }}"/>
                       @if($errors->has("jornal"))
                        <span class="help-block">{{ $errors->first("jornal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('chapeu')) has-error @endif">
                       <label for="chapeu-field">Chapeu</label>
                    <input type="text" id="chapeu-field" name="chapeu" class="form-control" value="{{ $prova->chapeu }}"/>
                       @if($errors->has("chapeu"))
                        <span class="help-block">{{ $errors->first("chapeu") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mesa')) has-error @endif">
                       <label for="mesa-field">Mesa</label>
                    <input type="text" id="mesa-field" name="mesa" class="form-control" value="{{ $prova->mesa }}"/>
                       @if($errors->has("mesa"))
                        <span class="help-block">{{ $errors->first("mesa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dor')) has-error @endif">
                       <label for="dor-field">Dor</label>
                    <input type="text" id="dor-field" name="dor" class="form-control" value="{{ $prova->dor }}"/>
                       @if($errors->has("dor"))
                        <span class="help-block">{{ $errors->first("dor") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('notaFinal')) has-error @endif">
                       <label for="notaFinal-field">Nota Final</label>
                    <input type="text" id="notaFinal-field" name="notaFinal" class="form-control" value="{{ $prova->notaFinal }}"/>
                       @if($errors->has("notaFinal"))
                        <span class="help-block">{{ $errors->first("notaFinal") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('arquivo')) has-error @endif">
                       <label for="arquivo-field">Arquivo</label>
                    <input type="text" id="arquivo-field" name="arquivo" class="form-control" value="{{ $prova->arquivo }}"/>
                       @if($errors->has("arquivo"))
                        <span class="help-block">{{ $errors->first("arquivo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacoes')) has-error @endif">
                       <label for="observacoes-field">Observações</label>
                    <textarea class="form-control" id="observacoes-field" rows="3" name="observacoes">{{ $prova->observacoes }}</textarea>
                       @if($errors->has("observacoes"))
                        <span class="help-block">{{ $errors->first("observacoes") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                  <?php if (User::tipoUserLogado()=='A') {?>
                    <button type="submit" class="btn btn-primary" href=" route('provasPorEntidade', array('tipoEntidade'=>'C', 'entidade_id'=>$prova->entidade_id)) }}">Guardar</button>
                  <?php }?>
                    <a class="btn btn-link pull-right" href="{{ route('provas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Voltar</a>
                </div>
            </form>

        </div>
    </div>
      </div>
@endsection