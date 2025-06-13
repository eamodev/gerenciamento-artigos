@extends('publicacoes.master')

@section('title', 'Lista de Publicações')

@section('content')

<!-- Ícones Material Symbols -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" />

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Publicações</h2>
    <a href="{{ route('publicacoes.create') }}" class="btn btn-success d-flex align-items-center">
        <span class="material-symbols-outlined me-1">post_add</span>
    Nova Publicação
</a>
</div>

@if ($publicacoes->isEmpty())
    <div class="alert alert-info">Nenhuma publicação cadastrada.</div>
@else
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($publicacoes as $publicacao)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $publicacao->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($publicacao->conteudo, 100, '...') }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('publicacoes.edit', $publicacao->id) }}" class="btn btn-outline-primary btn-sm d-flex align-items-center">
                            <span class="material-symbols-outlined me-1">edit</span> Editar
                        </a>

                        <form action="{{ route('publicacoes.destroy', $publicacao->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta publicação?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                <span class="material-symbols-outlined me-1">delete</span> Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

@endsection
