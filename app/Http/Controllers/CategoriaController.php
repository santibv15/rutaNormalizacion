<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CategoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewInsert(){
        return view ('Categoria/insert');
    }

    public function InsertCategoria(Request $categoria)
    {
        $instanciacategoria = new App\categoria;
        $instanciacategoria ->tipo_categoria = $categoria-> tipo_categoria;
        $instanciacategoria ->ambito = $categoria->ambito;
        $instanciacategoria -> save();

        return redirect('Categoria/view')->with('hecho', 'guardado');
    }

    public function ViewCategoria()
    {
        $objetoretornado = App\categoria::All();
        return view('Categoria/view', compact('objetoretornado'));
    }

    public function resuljson(){
        $verp =  App\categoria::All();
        $datos = array('data' => $verp);
        return $datos;
    }


    public function UpdateCategoria($id)
    {
        $updatecategoria = App\categoria::FindOrFail($id);
        return view('Categoria/update', compact('updatecategoria'));


    }

    public function UpdateBdCategoria(Request $categoria)
    {
        $instanciacategoria = App\categoria::FindOrFail($categoria->id);
        $instanciacategoria -> tipo_categoria = $categoria ->tipo_categoria;
        $instanciacategoria ->ambito = $categoria -> ambito;
        $instanciacategoria -> save();

        return redirect('Categoria/view')->with('hecho', 'actualizado');

    }

    public function DeleteCategoria($id)
    {
        $deletecategoria = App\categoria::FindOrFail($id);
        $deletecategoria->delete();
        return redirect('Categoria/view')->with('hecho', 'eliminado');
    } 
}
