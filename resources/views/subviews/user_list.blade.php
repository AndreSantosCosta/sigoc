<?php
use App\User;
?>

<div class="row">
    <div class="col-md-12">
        @if($users->count())
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Nome Próprio Militar</th>
                    <th>Apelido Militar</th>
                    <th class="text-right"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->TiposCompletoMilitar}}</td>
                    <td>{{$user->NomeProprioMilitar}}</td>
                    <td>{{$user->NomeApelidoMilitar}}</td>
                    <td></td>
                    <td></td>
                    <td class="text-right">
                        <?php if (User::tipoUserLogado()=='A' || User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U') {?>
                            <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                        <?php }?>
                        <?php if (User::tipoUserLogado()=='A') {?>
                            <a class="btn btn-xs btn-warning" href="{{ route('users.edit', $user->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                        <?php }?>
                        <?php if (User::tipoUserLogado()=='A') {?>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                            </form>
                        <?php }?>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $users->render() !!}
        @else
        <h3 class="text-center alert alert-info">Vazio!</h3>
        @endif
    </div>
</div>