@extends('templates.templateLista')
@section('content')

<h1 class="titulo">   Gestão de Produtos</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form formcad" method="POST" action="{{route('produtos.store')}} " >
    {!! csrf_field() !!}

<input type="text" name="name" placeholder="Nome" class="form-control" value="{{old('name')}}">
<label>
        <input type="checkbox" name="active"value="1">
        Ativo?
</label>

<input type="text" name="number" placeholder="Número"class="form-control" value="{{old('number')}}">


<select name="category" class="form-control" value="{{old('category')}}">
    <option>Escolha a Categoria</option>
    @foreach ($categoria as $item)
    <option value="{{$item}}">{{$item}}</option>

    @endforeach

</select>

<textarea type="text" name="description" placeholder="Descrição do Produto" class="form-control" value="{{old('description')}}"></textarea>
<button class="btn btn-primary button">Enviar</button>

</form>

@endsection
