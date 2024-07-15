@extends('admin.layouts.app')
@section('title', 'Sorteio do Amigo Secreto')
@section('content')
    <h1 class="text-4xl font-bold leading-tigh py-6 text-center uppercase">Resultado do sorteio</h1>
    <form action="#" method="get" class="my-8 px-4 max-w-3xl mx-auto bg-gray-100">

    <ul class="results">
        @foreach($resultados as $doador => $recebedor)
            <li class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">{{ $doador }} tirou {{ $recebedor }}</li>
        @endforeach
    </ul>
    <div div class="py-4">
        <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus: outline-none text-white font-bold py-2  px-4 py-1 rounded uppercase">
            <a href="{{ route('users.index') }}">Voltar</a>
        </button>
    </div>
    </form>
   
@endsection