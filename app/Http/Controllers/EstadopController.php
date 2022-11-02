<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class EstadopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(middleware:'verified');
    }

    public function ViewInsert(){
        return view ('EstadoProducto/insert');
    }

    

    public function InsertEstadop (Request $estadop)
    {
        $instanciaestadop = new App\Estado_Producto;
        $instanciaestadop -> tipo_estado = $estadop ->tipo_estado;
        $instanciaestadop ->save();
        
        return redirect('EstadoProducto/view')->with('hecho', 'guardado');
    }

    public function ViewEstadop ()
    {
        
        $objetoretornado = App\Estado_Producto::All();
        return view('EstadoProducto/view', compact('objetoretornado'));
    }

    public function resuljson(){
        $verp =  App\estado_producto::All();
        $datos = array('data' => $verp);
        return $datos;
    }



    public function UpdateEstadop($id)
    {
        $updateestadop = App\Estado_Producto::FindOrFail($id);
        return view('EstadoProducto/update', compact('updateestadop'));


    }

    public function UpdateBdEstadop(Request $estadop)
    {
        $instanciaestadop = App\Estado_Producto::FindOrFail($estadop->id);
        $instanciaestadop -> tipo_estado = $estadop ->tipo_estado;
        $instanciaestadop -> save();

        return redirect('EstadoProducto/view')->with('hecho', 'actualizado');

    }

    public function DeleteEstadop($id)
    {
        $deleteestadop = App\Estado_Producto::FindOrFail($id);
        $deleteestadop->delete();
        return redirect('EstadoProducto/view')->with('hecho', 'eliminado');
    }
}
