@extends('layout')

@section('conteudo')
    <h2>Registar Novo Carro</h2>

    <form action="{{ route('carros.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label>Marca:</label>
            <input type="text" name="marca" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Modelo:</label>
            <input type="text" name="modelo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ano:</label>
            <input type="number" name="ano" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Cor:</label>
            <input type="text" name="cor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Matrícula (Placa):</label>
            <input type="text" name="placa" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection