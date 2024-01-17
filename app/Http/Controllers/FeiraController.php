<?php

namespace App\Http\Controllers;

use App\Models\Feira;
use Illuminate\Http\Request;
use App\Http\Requests\feiraRequest;
use Illuminate\Support\Facades\Storage;

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
    /*public function store(feiraRequest $request)
    {

        $fields = $request->validated();
        $feira = new Feira();
        $feira->fill($fields);

        if ($request->hasFile('imagem')) {
            $img_path = $request->file('imagem')->store('public/imagens_feiras');
            $feira->feiraImagemURL  = basename($img_path);
        }

        $feira->save();

    return redirect()->route('admin.feiras.index')->with('success', 'Feira criada com sucesso');
    }*/

    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'required|string|max:255',
        'imagem' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'localizacao' => 'required|string|max:255',
        'dataInicio' => 'required|date',
        'dataFim' => 'required|date|after:dataInicio',
        'preco' => 'required|integer',
        ]);
        if ($request->hasFile('imagem')) {
            $img_path=$request->file('imagem')->store('public/feiras_image');
        }


    Feira::create([
        'feiraNome' => $request->input('nome'),
        'feiraDescricao' => $request->input('descricao'),
        'feiraImagemURL' => basename($img_path),
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

        return view('_admin.feiras.show', compact('feira'));
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
    /*public function update(Request $request, Feira $feira)
    {

        $fields = $request->validated();
        $feira->fill($fields);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('imagens_feiras/'.
            $feira->image);
            $img_path =
            $request->file('image')->store('public/imagens_feiras');
            $feira->image = basename($img_path);
            }
            $feira->save();
        return redirect()->route('admin.feiras.index')->with('success', 'Feira atualizada com sucesso');
    

    }*/

    public function update(Request $request, Feira $feira)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'imagem' =>  'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'localizacao' => 'required|string|max:255',
            'dataInicio' => 'required|date',
            'dataFim' => 'required|date|after:dataInicio',
            'preco' => 'required|integer',
            ]);
            if ($request->hasFile('imagem')) {
                if (!empty($feira->feiraImagemURL)) {
                    Storage::disk('public')->delete('feiras_image/' .$feira->feiraImagemURL);
                    }
                $img_path=$request->file('imagem')->store('public/feiras_image');
                $feira->update(['feiraImagemURL' => basename($img_path)]);

            }


        $feira->update([
            'feiraNome' => $request->input('nome'),
            'feiraDescricao' => $request->input('descricao'),
            'feiraLocalizacao' => $request->input('localizacao'),
            'feiraDataInicio' => $request->input('dataInicio'),
            'feiraDataFim' => $request->input('dataFim'),
            'feiraPreco' => $request->input('preco'),
        ]);

        return redirect()->route('admin.feiras.index')->with('success', 'Feira criada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feira $feira)
    {
        Storage::disk('public')->delete('imagens_feiras/' .$feira->image);
        $feira->delete();
        return redirect()->route('admin.feiras.index')->with('success',
            'Feira eliminada com sucesso');

    }
}
