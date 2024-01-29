<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Artesao;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('_admin.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produto = new Produto;
        $artesaos= Artesao::all();
        return view('_admin.produtos.create', compact("produto","artesaos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutoRequest $request)
    {
        $fields = $request->validated();
        $produto = new Produto();
        $produto->fill($fields);
        
        $img_path = $request->file('image')->store(
            'public/produtos_image');
        $produto->image = basename($img_path);
        $produto->save();
        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto criada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('_admin.produtos.show',compact("produto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('_admin.produtos.edit',compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdutoRequest $request, Produto $produto)
    {
        $fields=$request->validated();
        $produto->fill($fields);
        $produto->save();
        return redirect()->route('admin.produtos.index')->with('success',
        'Produto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        Storage::disk('public')->delete('produtos_image/' .$produto->image);
        $produto->delete();
        return redirect()->route('admin.produtos.index')->with('success',
            'produto eliminado com sucesso');
    }
}
