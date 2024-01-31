<?php

namespace App\Http\Controllers;
use App\Models\Feira;
use App\Models\Noticia;
use App\Models\Artesao;
use App\Models\Produto;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function patrocinadores(){
        return view('patrocinadores');
    }
    public function feira()
{
    $localizacoes = Feira::groupBy('feiraLocalizacao')->pluck('feiraLocalizacao');
    $feiras = Feira::all();
    return view('feiras', compact('feiras', 'localizacoes'));
}

    public function index(){
        return view('index');
    }
    public function signup(){
        return view('signup');
    }
    public function logar(){
        return view('logar');
    }
    public function noticia(){
        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));
    }

    
    public function artesaos(){
        $artesaos = Artesao::all();
        return view('artesaos', compact('artesaos'));
    }

    public function produtos($artesao_id)
    {
        // Recupere o artesão com base no ID
        $artesao = Artesao::find($artesao_id);

        if (!$artesao) {
            // Adicione lógica para lidar com o caso em que o artesão não é encontrado
            abort(404, 'Artesão não encontrado');
        }

        // Recupere os produtos associados ao artesão
        $produtos = Produto::where('artesao_id', $artesao->id)->get();

        // Retorne a view de produtos com os dados necessários
        return view('produtos', compact('artesao', 'produtos'));
    }

    public function admindashboard()
    {
        $count_produtos = Produto::count();
        $count_artesaos = Artesao::count();
        $count_noticias = Noticia::count();
        $count_feiras = Feira::count();
        return view('_admin.dashboard', compact(
            'count_produtos',
            'count_artesaos',
            'count_noticias',
            'count_feiras',
        ));
    }
}
