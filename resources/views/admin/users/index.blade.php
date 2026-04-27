@extends('admin.layouts.app')

@section('title', 'Listagem de Usuarios')

@section('content')
 <h1>Usuarios</h1>

<x-alert/>

    <a href="{{ route('users.create') }}">Adicionar novo usuario</a>


    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)

            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td> <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    <a href="{{ route('users.show', $user->id) }}">Detalhes</a> </a>
                </td>
            </tr>
            
            @empty
            <tr>
                <td colspan="100">Nenhum usuario cadastrado</td>
            </tr>
           @endforelse
        </tbody>
    </table>

    {{ $users->links() }}


@endsection