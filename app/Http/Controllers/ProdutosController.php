<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('listarProdutos', 
            [
                'prods' => $produtos
            ]
        );
    }
}
