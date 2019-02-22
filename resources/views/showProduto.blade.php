@extends('templates.templateLista')
@section('content')
<div class="distanc">
<h1>
        <span><a href="{{route('produtos.index')}}"><i class="material-icons" style="font-size:48px">assignment_return</i></a></span>
    Dados do produto {{$produto->name}}
</h1>
<p><b>Ativo:</b> {{$produto->active}}  </p>
<p><b>Nome:</b> {{$produto->name}}  </p>
<p><b>Categoria:</b> {{$produto->category}}  </p>
<p><b>Descrição:</b> {{$produto->description}}  </p>
</div>
<hr>
 <form class="form formcad" method="POST" action="{{route('produtos.destroy', $produto->id)}} " >
        {!! method_field('DELETE')!!}
        {!! csrf_field() !!}
<input type="submit" value="Apagar Produto" class="btn btn-danger">

</form>

@endsection
