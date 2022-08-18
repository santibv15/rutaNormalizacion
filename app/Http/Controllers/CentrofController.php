<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
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

        return redirect('CentroFormacion/view')->with('hecho', 'guardado');
    }

    public function ViewCentrof()
    {
        $objetoretornado = DB::table('centro_formacions')
                            ->join('regionales', 'regionales.id', '=', 'centro_formacions.regional_id')
                            ->select('centro_formacions.*', 'regionales.nombre_region', 'Centro_formacions.nombre')
                            ->get();
        return view('CentroFormacion/view', compact('objetoretornado'));
    }


    public function UpdateCentrof($id)
    {
        $inforegional = DB::table('centro_formacions')
                        ->join('regionales', 'regionales.id', '=', 'centro_formacions.regional_id')
                        ->select('centro_formacions.*', 'regionales.nombre_region', 'Centro_formacions.nombre')
                        ->get();
        return view('CentroFormacion/update', compact('inforegional'));


    }

    // public function UpdateBdCentrof(Request $centrof)
    // {
    //     $instanciacentrof = App\centro_formacion::FindOrFail($centrof->id);
    //     $instanciacentrof -> nombre = $centrof ->nombre;
    //     $instanciacentrof -> save();

    //     return redirect('CentroFormacion/view')->with('hecho', 'actualizado');

    // }





    public function DeleteCentrof($id)
    {
        $deletecentrof = App\centro_formacion::FindOrFail($id);
        $deletecentrof->delete();
        return redirect('CentroFormacion/view')->with('hecho', 'eliminado');
    }
}
