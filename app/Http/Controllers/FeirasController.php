<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feira;

class feirasController extends Controller
{
    public function index()
    {
        return view('feiras');
    }

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
}
