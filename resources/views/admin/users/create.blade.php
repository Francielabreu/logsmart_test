@extends('admin.layouts.app')
@section('title', 'Cadastros de Amigos Secreto')
@section('content')

<h1 class="text-4xl font-bold leading-tigh py-6 text-center uppercase">Cadastrar Amigo</h1>

<form action="{{ route('users.store') }}" method="POST" class="my-8 px-4 max-w-3xl mx-auto bg-gray-100">
    @include('components.alerts')
    @include('admin.users.partials.form')
   
    <div div class="py-4">
        <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus: outline-none text-white font-bold py-2  px-4 py-1 rounded uppercase">Cadastrar</button>
    </div>

</form>
@endsection