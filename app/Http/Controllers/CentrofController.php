<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CentrofController extends Controller
{
    public function ViewInsertCentrof ()
    {
        $inforegional = App\regionale::All();
        return view('CentroFormacion/insert', compact('inforegional'));
    }

    public function InsertCentrof (Request $centrof)
    {
        $instanciacentrof = new App\centro_formacion;
        $instanciacentrof -> nombre = $centrof-> nombre; 
        $instanciacentrof -> regional_id = $centrof -> regional_id;
        $instanciacentrof -> save (); 

        return redirect('CentroFromacion/view')->with('hecho', 'guardado');
    }

    public function ViewCentrof()
    {
        $objetoretornado = App\centro_formacion::All();
        return view('CentroFormacion/view', compact('objetoretornado'));
    }


    public function UpdateCentrof($id)
    {
        $updatecentrof = App\centro_formacion::FindOrFail($id);
        return view('Centro/update', compact('updatecentrof'));


    }

    public function UpdateBdCentrof(Request $centrof)
    {
        $instanciacentrof = App\centro_formacion::FindOrFail($centrof->id);
        $instanciacentrof -> nombre = $centrof ->nombre;
        $instanciacentrof -> save();

        return redirect('Centro/view')->with('hecho', 'actualizado');

    }





    public function DeleteCentrof($id)
    {
        $deletecentrof = App\centro_formacion::FindOrFail($id);
        $deletecentrof->delete();
        return redirect('CentroFormacion/view')->with('hecho', 'eliminado');
    }
}
