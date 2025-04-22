@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">📋 Tipos de Contato</h1>

    <a href="{{ route('tipocontatos.create') }}" class="btn btn-primary mb-3">
        + Novo Tipo
    </a> {{-- //alterado aqui --}}

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive shadow-sm rounded bg-white">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tipoContatos as $tipoContato)
                    <tr>
                        <td>{{ $tipoContato->id }}</td>
                        <td>{{ $tipoContato->nome }}</td>
                        <td>{{ $tipoContato->descricao }}</td>
                        <td class="text-center">
                            <a href="{{ route('tipocontatos.show', $tipoContato->id) }}" class="btn btn-outline-info btn-sm me-1">
                                Ver
                            </a>
                            <a href="{{ route('tipocontatos.edit', $tipoContato->id) }}" class="btn btn-outline-warning btn-sm me-1">
                                Editar
                            </a>
                            <form action="{{ route('tipocontatos.destroy', $tipoContato->id) }}" method="POST" class="d-inline-block"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este tipo de contato?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Nenhum tipo de contato encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
