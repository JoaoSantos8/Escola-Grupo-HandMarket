<?php

namespace App\Http\Controllers;
use App\Models\Feira;
use App\Models\Noticia;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function patrocinadores(){
        return view('patrocinadores');
    }
    public function feira(){
        $feiras = Feira::all();
        return view('feiras', compact('feiras'));
    }
    public function index(){
        return view('index');
    }
    public function signup(){
        return view('signup');
    }
    public function noticia(){
        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));
    }
}
