@extends('templates.templateLista')
@section('content')

<h1 class="titulo"> <a href="{{route('produtos.index')}}"><i class="material-icons" style="font-size:48px">assignment_return</i></a> Gestão de Produtos


</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@if(isset($produto))

<form class="form formcad" method="POST" action="{{route('produtos.update', $produto->id)}} " >
{!! method_field('PUT')!!}

@else
<form class="form formcad" method="POST" action="{{route('produtos.store')}} " >

@endif


    {!! csrf_field() !!}


<input type="text" name="name" placeholder="Nome" class="form-control" value="{{$produto->name ?? old('name')}}">
    <label>
        <input type="checkbox" name="active" value="1"  @if(isset($produto)&& $produto->active ?? old('active') ==1) checked @endif>
        Ativo?
    </label>

<input type="text" name="number" placeholder="Número"class="form-control" value="{{$produto->number ?? old('number')}}" >


<select name="category" class="form-control" value="{{$produto->category ?? old('category')}}">
    <option>Escolha a Categoria</option>
        @foreach ($categoria as $item)
         <option value="{{$item}}"
             @if (@isset($produto)&& $produto->category == $item)
             selected

            @endif
        >{{$item}}</option>

     @endforeach

</select>

<textarea type="text" name="description" placeholder="Descrição do Produto" class="form-control" >{{$produto->description  ?? old('description')}}</textarea>
<button class="btn btn-primary button">Enviar</button>

</form>

@endsection
