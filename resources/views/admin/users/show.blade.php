@extends('admin.layouts.app')
@section('title', 'Detalhes dos Participantes')

@section('content')
    <h1 class="text-4xl font-bold leading-tigh py-6 text-center uppercase">Detalhes do Participante</h1>
    <form action="#" method="post" class="my-8 px-4 max-w-3xl mx-auto bg-gray-100">
    <ul>
        <li class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">Nome: {{ $user->name }}</li>
        <li class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">E-mail: {{ $user->email }}</li>
    </ul>
    
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="w-full shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus: outline-none text-white font-bold py-2 uppercase px-4 py-1 rounded">Deletar</button>
    </form>
    </form>
@endsection