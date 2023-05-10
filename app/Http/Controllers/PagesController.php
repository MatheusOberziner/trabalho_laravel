<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private $contatos = [];
    public function lista()
    {
        $filmes = [
            ['codigo' => 1, 'titulo' => 'O Senhor dos Anéis - O Retorno do Rei', 'direcao' => 'Peter Jackson', 'genero' => 'Aventura, Fantasia', 'imagem' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/92/91/47/20224867.jpg'],
            ['codigo' => 2, 'titulo' => 'O Silêncio dos Inocentes', 'direcao' => 'Jonathan Demme', 'genero' => 'Drama, Suspense', 'imagem' => 'https://br.web.img3.acsta.net/c_310_420/pictures/14/10/07/22/16/591185.jpg'],
            ['codigo' => 3, 'titulo' => 'Viva - A Vida é uma Festa', 'direcao' => 'Adrian Molina, Lee Unkrich',  'genero' => 'Animação, Fantasia', 'imagem' => 'https://br.web.img3.acsta.net/c_310_420/pictures/17/12/07/11/33/0502209.jpg'],
            ['codigo' => 4, 'titulo' => 'O Resgate do Soldado Ryan', 'direcao' => 'Steven Spielberg',  'genero' => 'Drama, Guerra', 'imagem' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/96/07/36/20443914.jpg'],
            ['codigo' => 5, 'titulo' => 'Interestelar', 'direcao' => 'Cristopher Nolan',  'genero' => 'Drama, Ficção Científica', 'imagem' => 'https://br.web.img3.acsta.net/c_310_420/pictures/14/10/31/20/39/476171.jpg'],
            ['codigo' => 6, 'titulo' => 'A Origem', 'direcao' => 'Cristopher Nolan',  'genero' => 'Ficção científica, Suspense', 'imagem' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/87/32/31/20028688.jpg'],
            ['codigo' => 7, 'titulo' => 'Clube da Luta', 'direcao' => 'David Finscher',  'genero' => 'Suspense, Drama', 'imagem' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/90/95/96/20122166.jpg'],
        ];
        return view('home', compact('filmes'));
    }

    public function cadastro(Request $request)
    {        
        $data = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
        ];

        $this->contatos[] = $data;
        return view('cadastro', compact('data'));
    }

    public function listaContatos() {
        return view('contato', ['contatos' => $this->contatos]);
    }
}