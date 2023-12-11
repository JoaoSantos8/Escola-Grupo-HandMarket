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
        $novafeiras = feira::all();
        return view('feiras', compact('novafeiras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'localizacao' => 'required|string|max:255',
        'data_inicio' => 'required|date',
        'data_fim' => 'required|date|after:data_inicio',
    ]);

    feira::create([
        'nome' => $request->input('nome'),
        'localizacao' => $request->input('localizacao'),
        'data_inicio' => $request->input('data_inicio'),
        'data_fim' => $request->input('data_fim'),
    ]);

    return redirect('/formularionovafeira')->with('success', 'Feira adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feira $feira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feira $feira)
    {
        //
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
