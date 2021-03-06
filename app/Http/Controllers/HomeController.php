<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function faq()
    {
        return view('FAQ');
    }

    public function todasCategorias(){
        $categorias = Categoria::paginate(6);
        return view('categorias', compact('categorias'));
    }

    public function detalleCategoria($id){
        $categorias = Categoria::find($id);
        $productoCategoria = Producto::where('categoria_id', 'like', $categorias->id)->paginate(6);
        return view('detallecategoria', compact('productoCategoria'));
    }

}
