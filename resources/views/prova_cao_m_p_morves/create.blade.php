@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> ProvaCaoMPMorves / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('prova_cao_m_p_morves.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('peso')) has-error @endif">
                       <label for="peso-field">Peso</label>
                    <input type="text" id="peso-field" name="peso" class="form-control" value="{{ old("peso") }}"/>
                       @if($errors->has("peso"))
                        <span class="help-block">{{ $errors->first("peso") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('comprimento')) has-error @endif">
                       <label for="comprimento-field">Comprimento</label>
                    <input type="text" id="comprimento-field" name="comprimento" class="form-control" value="{{ old("comprimento") }}"/>
                       @if($errors->has("comprimento"))
                        <span class="help-block">{{ $errors->first("comprimento") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('altgarrote')) has-error @endif">
                       <label for="altgarrote-field">AltGarrote</label>
                    <input type="text" id="altgarrote-field" name="altgarrote" class="form-control" value="{{ old("altgarrote") }}"/>
                       @if($errors->has("altgarrote"))
                        <span class="help-block">{{ $errors->first("altgarrote") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('altgarupa')) has-error @endif">
                       <label for="altgarupa-field">AltGarupa</label>
                    <input type="text" id="altgarupa-field" name="altgarupa" class="form-control" value="{{ old("altgarupa") }}"/>
                       @if($errors->has("altgarupa"))
                        <span class="help-block">{{ $errors->first("altgarupa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pelagem')) has-error @endif">
                       <label for="pelagem-field">Pelagem</label>
                    <input type="text" id="pelagem-field" name="pelagem" class="form-control" value="{{ old("pelagem") }}"/>
                       @if($errors->has("pelagem"))
                        <span class="help-block">{{ $errors->first("pelagem") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('perimetro')) has-error @endif">
                       <label for="perimetro-field">Perimetro</label>
                    <input type="text" id="perimetro-field" name="perimetro" class="form-control" value="{{ old("perimetro") }}"/>
                       @if($errors->has("perimetro"))
                        <span class="help-block">{{ $errors->first("perimetro") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('orelhas')) has-error @endif">
                       <label for="orelhas-field">Orelhas</label>
                    <input type="text" id="orelhas-field" name="orelhas" class="form-control" value="{{ old("orelhas") }}"/>
                       @if($errors->has("orelhas"))
                        <span class="help-block">{{ $errors->first("orelhas") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('distolhos')) has-error @endif">
                       <label for="distolhos-field">DistOlhos</label>
                    <input type="text" id="distolhos-field" name="distolhos" class="form-control" value="{{ old("distolhos") }}"/>
                       @if($errors->has("distolhos"))
                        <span class="help-block">{{ $errors->first("distolhos") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('distocciptrufa')) has-error @endif">
                       <label for="distocciptrufa-field">DistOccipTrufa</label>
                    <input type="text" id="distocciptrufa-field" name="distocciptrufa" class="form-control" value="{{ old("distocciptrufa") }}"/>
                       @if($errors->has("distocciptrufa"))
                        <span class="help-block">{{ $errors->first("distocciptrufa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('compchanfro')) has-error @endif">
                       <label for="compchanfro-field">CompChanfro</label>
                    <input type="text" id="compchanfro-field" name="compchanfro" class="form-control" value="{{ old("compchanfro") }}"/>
                       @if($errors->has("compchanfro"))
                        <span class="help-block">{{ $errors->first("compchanfro") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('diamchanfro')) has-error @endif">
                       <label for="diamchanfro-field">DiamChanfro</label>
                    <input type="text" id="diamchanfro-field" name="diamchanfro" class="form-control" value="{{ old("diamchanfro") }}"/>
                       @if($errors->has("diamchanfro"))
                        <span class="help-block">{{ $errors->first("diamchanfro") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('prova_cao_m_p_morves.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection