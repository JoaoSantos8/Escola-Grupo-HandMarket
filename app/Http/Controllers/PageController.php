<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function patrocinadores(){
        return view('patrocinadores');
    }
    public function index(){
        return view('index');
    }
    public function signup(){
        return view('signup');
    }
    public function noticia(){
        return view('noticias');
    }
}
