
@extends('layouts.app')

@section('content')
<h1>Lista de Professores</h1>
<a href="{{ route('professores.create') }}">Adicionar Novo Professor</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($professores as $professor)
            <tr>
                <td>{{ $professor->id }}</td>
                <td>{{ $professor->nome }}</td>
                <td>{{ $professor->email }}</td>
                <td>
                    <a href="{{ route('professores.edit', $professor->id) }}">Editar</a>
                    <form action="{{ route('professores.destroy', $professor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

