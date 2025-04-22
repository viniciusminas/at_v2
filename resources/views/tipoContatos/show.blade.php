@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Tipo de Contato</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $tipoContato->nome }}</h5>
            <p class="card-text">{{ $tipoContato->descricao }}</p>
            <a href="{{ route('tipo-contatos.edit', $tipoContato->id) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('tipo-contatos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection