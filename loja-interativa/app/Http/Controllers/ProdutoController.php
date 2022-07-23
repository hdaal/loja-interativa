<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        return view('produtos.index');
    }
    public function store(Request $request) {

        Produto::create($request->all());

        return to_route('produtos.index');
    }
}
