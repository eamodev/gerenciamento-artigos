<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacaoController;



Route::prefix('publicacoes')->group(function () {
    Route::get('/', [PublicacaoController::class, 'index'])->name('publicacoes.index');
    Route::get('/create', [PublicacaoController::class, 'create'])->name('publicacoes.create');
    Route::post('/', [PublicacaoController::class, 'store'])->name('publicacoes.store');
    Route::get('/{id}', [PublicacaoController::class, 'show'])->name('publicacoes.show');
    Route::get('/{id}/edit', [PublicacaoController::class, 'edit'])->name('publicacoes.edit');
    Route::put('/{id}', [PublicacaoController::class, 'update'])->name('publicacoes.update');
    Route::delete('/{id}', [PublicacaoController::class, 'destroy'])->name('publicacoes.destroy');
});