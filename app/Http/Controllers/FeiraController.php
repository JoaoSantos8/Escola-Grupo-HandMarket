<?php

namespace App\Http\Controllers;

use App\Models\Feira;
use Illuminate\Http\Request;

class FeiraController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feiras = Feira::all();
        
        return view('_admin.feiras.index', compact('feiras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $feira = new Feira();
        return view('_admin.feiras.create', compact('feira'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'required|string|max:255',
        'imagem' => 'string|max:255',
        'localizacao' => 'required|string|max:255',
        'dataInicio' => 'required|date',
        'dataFim' => 'required|date|after:dataInicio',
        'preco' => 'required|integer',
    ]);


    Feira::create([
        'feiraNome' => $request->input('nome'),
        'feiraDescricao' => $request->input('descricao'),
        'feiraImagemURL' => $request->input('imagem'),
        'feiraLocalizacao' => $request->input('localizacao'),
        'feiraDataInicio' => $request->input('dataInicio'),
        'feiraDataFim' => $request->input('dataFim'),
        'feiraPreco' => $request->input('preco'),
    ]);

    return redirect()->route('admin.feiras.index')->with('success', 'Feira criada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feira $feira)
    {

        return view('_admin.feiras.index', compact('feira'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feira $feira)
{
    return view('_admin.feiras.edit', compact('feira'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feira $feira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feira $feira)
    {
        //
    }
}
