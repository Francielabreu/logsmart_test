@extends('admin.layouts.app')
@section('title', 'Listagem dos Amigo Secreto')
@section('content')
 
<h1 class="text-4xl font-bold leading-tigh py-4 uppercase text-center uppercase">Amigo Secreto <span style="color: orange;">Log</span><span style="color: blue;">Smart</span></h1>

<form action="{{ route('users.index') }}" method="get">
  @csrf
 
    <a href="{{ route('users.create') }} " class="bg-orange-400 rounded text-white px-3 py-1 uppercase">Novo Usuario</a>
    <input type="text" name="search" placeholder="Pesquisar" class="text-gray-700 px-3 py-1 uppercase border rounded">
    <button type="submit" class="bg-orange-400 rounded text-white px-3 py-1 uppercase">Pesquisar</button>
</form>

<div class="py-4">
<a href="{{ route('users.sorteio') }} " class="bg-blue-900 rounded text-white px-3 py-2 uppercase">Sorteio</a>
</div>
   
@include('components.alerts')

    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden text-center uppercase">
        <thead>
            <tr>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Nome</th>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Email</th>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->name }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                        <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                </tr>
            @empty
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="100">Nenhuma pessoa encontrada</td></td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="py-4">
        {{ $users->links() }}
    </div>
@endsection