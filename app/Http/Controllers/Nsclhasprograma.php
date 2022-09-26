<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class Nsclhasprograma extends Controller
{

    public function ViewDetallePrograma($id)
    {
        $detalleprograma = App\programa_formacion::FindOrFail($id);
        $infonorma = App\nscl::All();
        $infoprograma =App\programa_formacion::All();

        return view('ProgramaFormacion/detalle', compact('detalleprograma', 'infonorma', 'infoprograma'));
    }

    public function AgregarNorma(Request $norma)
    {
        $instancianorma= new App\nsclhasprograma;
        
        $instancianorma = new App\nsclhasprograma();
        $instancianorma -> nscl_id = $norma ->nscl_id;
        $instancianorma -> programa_id = $norma -> programa_id;
        $instancianorma -> save();

        return redirect('ProgramaFormacion/detalle/(id)')->with('hecho', 'guardado');

    }
}
