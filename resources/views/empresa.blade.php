@extends('templates.templateLista')

@section('content')
  <h1 class="titulo">Listagem de Itens</h1>
  <a type="button" href="{{route('produtos.create')}}" class="btn btn-primary button" ><i class="material-icons">perm_identity</i>Cadastrar
</a>
<table class="table table-striped">

    <tr>
        <th class="th">Nome </th>
        <th class="th">Descrição</th>
        <th class="th">Ações</th>
    </tr>


@foreach ($produtos as $item)

    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>
            <a href="{{route("produtos.edit", $item->id)}}"class=" action edit" >
                    <i class="material-icons">border_color</i>
            </a>
            <a href="{{route("produtos.show", $item->id)}}" class="action delete">
                <i class="material-icons">assignment_ind</i>
            </a>
        </td>
    </tr>

@endforeach
</table>
{{ $produtos->links() }}
@endsection
