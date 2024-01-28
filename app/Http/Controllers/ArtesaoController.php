<?php

namespace App\Http\Controllers;

use App\Models\Artesao;
use Illuminate\Http\Request;
use App\Http\Requests\ArtesaoRequest;
use Illuminate\Support\Facades\Storage;

class ArtesaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artesaos = Artesao::all();
        return view('_admin.artesaos.index', compact('artesaos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artesao = new Artesao;
        return view('_admin.artesaos.create', compact("artesao"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtesaoRequest $request)
    {
        $fields = $request->validated();
        $artesao = new Artesao();
        $artesao->fill($fields);
        
        $img_path = $request->file('image')->store(
            'public/artesaos_image');
        $artesao->image = basename($img_path);
        $artesao->save();
        return redirect()->route('admin.artesaos.index')
            ->with('success', 'Artesao criada com sucesso');


    }

    /**
     * Display the specified resource.
     */
    public function show(Artesao $artesao)
    {
        return view('_admin.artesaos.show',compact("artesao"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artesao $artesao)
    {
        return view('_admin.artesaos.edit',compact('artesao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtesaoRequest $request, Artesao $artesao)
    {
        $fields=$request->validated();
        $artesao->fill($fields);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('artesaos_image/'.
            $artesao->image);
            $img_path =
            $request->file('image')->store('public/artesaos_image');
            $artesao->image = basename($img_path);
            }
        $artesao->save();
        return redirect()->route('admin.artesaos.index')->with('success','Artesao atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artesao $artesao)
    {
        Storage::disk('public')->delete('artesaos_image/' .$artesao->image);
        $artesao->delete();
        return redirect()->route('admin.artesaos.index')->with('success',
            'artesao eliminado com sucesso');
    }
}
