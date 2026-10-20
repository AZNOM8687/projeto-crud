@extends('layout')

@section('conteudo')
    <h2>Editar Carro</h2>

    <form action="{{ route('carros.update', $carro->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Marca:</label>
            <input type="text" name="marca" value="{{ $carro->marca }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Modelo:</label>
            <input type="text" name="modelo" value="{{ $carro->modelo }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ano:</label>
            <input type="number" name="ano" value="{{ $carro->ano }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Cor:</label>
            <input type="text" name="cor" value="{{ $carro->cor }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Matrícula (Placa):</label>
            <input type="text" name="placa" value="{{ $carro->placa }}" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection