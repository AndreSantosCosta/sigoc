@extends('layout')
@section('header') 
<div class="col-md-12">
    <div class="page-header">
        <h1>Prova Não Encontrada</h1>
        <form action="" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
      </form>
        
</div>
</div>
@endsection



@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="#">
           <div class="col-md-12">
                   <label for="data_inicio">Tipo de prova selecionada não existe</label>
            </div>
        </form>

      
   </div>
</div>
@endsection