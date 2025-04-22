@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($tipoContato) ? 'Editar' : 'Criar' }} Tipo de Contato</h1>
    
    <form action="{{ isset($tipoContato) ? route('tipocontatos.update', $tipoContato->id) : route('tipocontatos.store') }}" method="POST">
        @csrf
        @if(isset($tipoContato))
            @method('PUT')
        @endif
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" 
                   value="{{ isset($tipoContato) ? $tipoContato->nome : old('nome') }}" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ isset($tipoContato) ? $tipoContato->descricao : old('descricao') }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('tipocontatos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection