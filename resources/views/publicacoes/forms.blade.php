@extends('publicacoes.master')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        {{ isset($publicacao) ? 'Editar Publicação' : 'Nova Publicação' }}
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ops!</strong> Há alguns problemas com os dados:
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ isset($publicacao) ? route('publicacoes.update', $publicacao->id) : route('publicacoes.store') }}">
            @csrf
            @if(isset($publicacao))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="titulo" class="form-label">Título *</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $publicacao->titulo ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="4">{{ old('conteudo', $publicacao->conteudo ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="ativo" {{ old('status', $publicacao->status ?? '') === 'ativo' ? 'selected' : '' }}>Ativo</option>
                    <option value="inativo" {{ old('status', $publicacao->status ?? '') === 'inativo' ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('publicacoes.index') }}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">
                    {{ isset($publicacao) ? 'Atualizar' : 'Criar' }} Publicação
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
