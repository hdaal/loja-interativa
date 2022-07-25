<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

use App\Models\Categoria;

use App\Models\Fabricante;

class ProdutoController extends Controller
{
    public function index() {
        
        $produtos = Produto::all();

        $categorias = Categoria::all();

        $fabricantes = Fabricante::all();

        return view('produtos.index')->with('produtos', $produtos)
            ->with('fabricantes', $fabricantes)
            ->with('categorias', $categorias);
    }

    public function store(Request $request) {

        Produto::create($request->all());

        return to_route('produtos.index');
    }

    public function edit($id) {

        $produto = Produto::find($id);
        return view('produtos.edit')->with('produto', $produto);
    }

    public function update(Request $request, $id) {
        $produto = Produto::find($id);

        $produto->fill($request->all());
        $produto->save();

        return to_route('produtos.index');
    }
    public function destroy($id) {

        $produto = Produto::find($id);
        
        $produto->delete();

        return to_route('produtos.index');

    }

}
