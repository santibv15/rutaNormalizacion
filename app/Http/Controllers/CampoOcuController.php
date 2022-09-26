<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CampoOcuController extends Controller
{
    public function InsertCampoOcu(Request $campo_ocupacional)
    {
        $instanciacampoocupacional = new App\campo_ocupacional;
        $instanciacampoocupacional -> nombre_campo_ocu = $campo_ocupacional -> nombre_campo_ocu;
        $instanciacampoocupacional -> codigo_campo_ocu = $campo_ocupacional -> codigo_campo_ocu;
        $instanciacampoocupacional -> save();

        return redirect('CampoOcupacional/view')->with('hecho', 'Registrado');
    }

    
    public function ViewCampoOcu(){
        $objetoretornado = App\campo_ocupacional::All();
        return view('CampoOcupacional/view', compact('objetoretornado'));
    }

    public function resuljson(){
        $verp =  App\campo_ocupacional::All();
        $datos = array('data' => $verp);
        return $datos;
    }

     
    public function UpdateCampoOcu($id)
    {
        $updatecampoocu = App\campo_ocupacional::FindOrFail($id);
        return view('CampoOcupacional/update', compact('updatecampoocu'));


    }

    public function UpdateBdCampoOcu(Request $campo_ocupacional)
    {
        $instanciacampoocupacional =  App\campo_ocupacional::FindOrFail($campo_ocupacional->id);
        $instanciacampoocupacional -> nombre_campo_ocu = $campo_ocupacional -> nombre_campo_ocu;
        $instanciacampoocupacional -> codigo_campo_ocu = $campo_ocupacional -> codigo_campo_ocu;
        $instanciacampoocupacional -> save();

        return redirect('CampoOcupacional/view')->with('hecho', 'actualizado');

    }

    public function DeleteCampoOcu($id)
    {
        $deletecampoocu = App\campo_ocupacional::FindOrFail($id);
        $deletecampoocu ->delete();

        return redirect('CampoOcupacional/view')->with('hecho', 'eliminado');
    }
    
}



