@extends('templates.template')

@section('content')
    <h1>Home page</h1>

    <h2>{{$teste}}</h2>

<h3>{{$teste1}}</h3>
@if ($var=='456')
    <p>igual</p>


    @else

    <p>diferente</p>
@endif



    @unless ($var=='456')
        <p>Não é igual...unless</p>
    @endunless

    <h2>for</h2>

    @for ($i = 0; $i < 10; $i++)

        <p>for:{{$i}}</p>
    @endfor
    <p>+++++++++++++</p>

    <h2>forech</h2>
        @foreach ($arrayTeste as $item)
            <p>foreach: {{$item}}</p>

         @endforeach

         <p>-------------------------</p>
<h2>forelse</h2>
    @forelse ($array2 as $item)
        <p>forelse:{{$item}}</p>
    @empty
        <p>Não possui valores o array</p>
    @endforelse

    @include('include')

{{--comentario --}}
@endsection

@push('script')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endpush
