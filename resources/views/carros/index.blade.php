@extends('layout')

@section('conteudo')
    <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
        <h2 class="text-primary">Lista de Carros</h2>
        <a href="{{ route('carros.create') }}" class="btn btn-primary">
            + Adicionar Novo Carro
        </a>
    </div>

    @if(session('sucesso'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-3">ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th>Cor</th>
                            <th>Matrícula</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carros as $carro)
                        <tr>
                            <td class="ps-3 fw-bold">{{ $carro->id }}</td>
                            <td>{{ $carro->marca }}</td>
                            <td>{{ $carro->modelo }}</td>
                            <td>{{ $carro->ano }}</td>
                            <td>{{ $carro->cor }}</td>
                            <td><span class="badge bg-secondary">{{ $carro->placa }}</span></td>
                            <td class="text-center">
                                <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-sm btn-outline-warning fw-bold me-1">Editar</a>
                                <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger fw-bold" onclick="return confirm('Tem a certeza que deseja apagar este registo?')">Apagar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection