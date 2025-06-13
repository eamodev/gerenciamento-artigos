<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Http\Requests\StorePublicacaoRequest;
use App\Http\Requests\UpdatePublicacaoRequest;

class PublicacaoController extends Controller
{
    public function index()
    {
        $publicacoes = Publicacao::all();
        return view('publicacoes.index', compact('publicacoes'));
    }


    public function create()
    {
        return view('publicacoes.forms');
    }


    public function store(StorePublicacaoRequest $request)
    {
        $data = $request->validated();
        $publicacao = Publicacao::create($data);

        return redirect()
            ->route('publicacoes.index')
            ->with('success', 'Publicação criada com sucesso!');
    }


    public function show($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        return view('publicacoes.show', compact('publicacao'));
    }


    public function edit($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        return view('publicacoes.forms', compact('publicacao'));
    }


    public function update(UpdatePublicacaoRequest $request, $id)
    {
        $publicacao = Publicacao::findOrFail($id);
        $publicacao->update($request->validated());

        return redirect()
            ->route('publicacoes.index')
            ->with('success', 'Publicação editada com sucesso!');
    }


    public function destroy($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        $publicacao->delete();

        return redirect()
            ->route('publicacoes.index')
            ->with('success', 'Publicação excluida com sucesso!');
    }
}
