@extends('layout')

@section('conteudo')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Lista de Carros</h2>
        <a href="{{ route('carros.create') }}" class="btn btn-primary">Adicionar Carro</a>
    </div>

    @if(session('sucesso'))
        <div class="alert alert-success">{{ session('sucesso') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Cor</th>
                <th>Matrícula</th>
                
            </tr>
            <td>{{ $carro->placa }}</td>
                <td>
                    <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem a certeza que deseja apagar?')">Apagar</button>
                    </form>
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
            <tr>
                <td>{{ $carro->id }}</td>
                <td>{{ $carro->marca }}</td>
                <td>{{ $carro->modelo }}</td>
                <td>{{ $carro->ano }}</td>
                <td>{{ $carro->cor }}</td>
                <td>{{ $carro->placa }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection