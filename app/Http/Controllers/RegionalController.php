<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class RegionalController extends Controller
{

    public function InsertRegional(Request $regional)
    {
        $instanciaregional = new App\regionale;
        $instanciaregional -> nombre_region = $regional -> nombre_region;
        $instanciaregional -> save();

        return redirect('Regional/view')->with('hecho', 'Registrado');
    }

    public function ViewRegional(){
        $objetoretornado = App\regionale::All();
        return view('Regional/view', compact('objetoretornado'));
    }

    public function resuljson(){
        $verp =  App\regionale::All();
        $datos = array('data' => $verp);
        return $datos;
    }


    public function UpdateRegional($id)
    {
        $updateregional = App\regionale::FindOrFail($id);
        return view('Regional/update', compact('updateregional'));


    }

    public function UpdateBdRegional(Request $regional)
    {
        $instanciaregional =  App\regionale::FindOrFail($regional->id);
        $instanciaregional -> nombre_region = $regional ->nombre_region;
        $instanciaregional -> save();

        return redirect('Regional/view')->with('hecho', 'actualizado');

    }

    public function DeleteRegional($id)
    {
        $deletemesa = App\regionale::FindOrFail($id);
        $deletemesa ->delete();

        return redirect('Regional/view')->with('hecho', 'eliminado');
    }
}
