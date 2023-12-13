<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('_admin.noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $noticia = new Noticia;
        return view('_admin.noticias.create', compact("noticia"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoticiaRequest $request)
    {
        
        $fields = $request->validated();
        $noticia = new Noticia();
        $noticia->fill($fields);
        $noticia->save();
        return redirect()->route('admin.noticias.index')->with('success', 'Noticia criada com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        return view('_admin.noticias.show', compact("noticia"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        return view('_admin.noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticiaRequest $request, Noticia $noticia)
    {
        $fields = $request->validated();
        $noticia->fill($fields);
        $noticia->save();
        return redirect()->route('admin.noticias.index')->with('success', 'Noticia atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {

        $noticia->delete();
        return redirect()->route('admin.noticias.index')->with('success',
            'Noticia eliminada com sucesso');

    }
}
