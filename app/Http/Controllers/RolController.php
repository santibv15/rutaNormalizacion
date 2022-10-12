<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolController extends Controller
{
    public function InsertRol(Request $rol)
    {
        $instanciarol = new App\role;
        $instanciarol -> tipo_rol = $rol -> tipo_rol;
        $instanciarol -> save();

        return redirect('Rol/view')->with('hecho', 'Registrado');
    }

    
    public function ViewRol(){
        $objetoretornado = App\role::All();
        return view('Rol/view', compact('objetoretornado'));
    }

    public function resuljson(){
        $verp =  App\role::All();
        $datos = array('data' => $verp);
        return $datos;
    }

    
    public function UpdateRol($id)
    {
        $updaterol = App\rol::FindOrFail($id);
        return view('Rol/update', compact('updaterol'));


    }

    public function UpdateBdRol(Request $rol)
    {
        $instanciarol =  App\role::FindOrFail($rol->id);
        $instanciarol -> tipo_rol = $rol -> tipo_rol;
        $instanciarol -> save();

        return redirect('Rol2/view')->with('hecho', 'actualizado');

    }

    public function DeleteSector($id)
    {
        $deletesector = App\sectore::FindOrFail($id);
        $deletesector ->delete();

        return redirect('Sectores/view')->with('hecho', 'eliminado');
    }
}
