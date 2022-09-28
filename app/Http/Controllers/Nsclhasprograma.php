<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;
class Nsclhasprograma extends Controller
{

    public function ViewDetallePrograma($id)
    {
        $detalleprograma = App\programa_formacion::FindOrFail($id);
        $infonorma = App\nscl::All();
        $infoprograma =App\programa_formacion::All();

        $detalleprograma = DB::table('programa_formacions')
        ->join('tipo_programas', 'tipo_programas.id', '=', 'programa_formacions.tipo_programa_id')
        ->join('campo_ocupacionals', 'campo_ocupacionals.id','=','programa_formacions.campo_ocupacional_id')

        ->select('programa_formacions.*', 'tipo_programas.nombre_tipo_prog', 'campo_ocupacionals.nombre_campo_ocu')
        ->where('programa_formacions.id','=', $id)
        ->get();

        return view('ProgramaFormacion/detalle', compact('detalleprograma', 'infonorma', 'infoprograma'));
    }

    public function AgregarNorma(Request $norma)
    {   
        $jd=$norma->normaId;

            for($i=0;$i<count($jd); $i++){
                $instancianorma2= new App\nsclhasprograma();
                $instancianorma2-> nscl_id = $jd[$i];
                $instancianorma2 -> programa_id = $norma -> programa_id;
                $instancianorma2 -> save();
            }
        return redirect('ProgramaFormacion/detalle/$id')->with('hecho', 'guardado');

    }

   
}
