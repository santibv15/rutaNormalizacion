<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;
class Nsclhasprograma extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $listaagregadas = DB::table('nsclhasprogramas')
        ->join('programa_formacions', 'programa_formacions.id', '=', 'nsclhasprogramas.programa_id')
        ->join('nscls', 'nscls.id', '=', 'nsclhasprogramas.nscl_id')
        ->select('nsclhasprogramas.*','programa_formacions.id', 'nscls.titulo', 'nscls.codigo_nscl')
        ->where('nsclhasprogramas.programa_id','=', $id)
        ->get();



        return view('ProgramaFormacion/detalle', compact('detalleprograma', 'infonorma', 'infoprograma', 'listaagregadas'));
    }

    public function ViewDetalleNscl($id)
    {

        $infoprograma =App\programa_formacion::All();
        
        $detallenscl= DB::table('nscls')
        ->join('mesa_sectorials', 'mesa_sectorials.id', '=', 'nscls.mesa_sectorial_id')
        ->join('estado_productos', 'estado_productos.id','=','nscls.estado_producto_id')
        ->join('centro_formacions', 'centro_formacions.id','=','nscls.centro_formacion_id')
        ->join('categorias', 'categorias.id','=','nscls.categoria_id')
        ->select('nscls.*','nscls.titulo', 'mesa_sectorials.nombre_sector', 'estado_productos.tipo_estado'
        , 'centro_formacions.nombre', 'categorias.tipo_categoria')
        ->where('nscls.id','=', $id)
        ->get();


        $listaagregadas = DB::table('nsclhasprogramas')
        ->join('programa_formacions', 'programa_formacions.id', '=', 'nsclhasprogramas.programa_id')
        ->join('nscls', 'nscls.id', '=', 'nsclhasprogramas.nscl_id')
        ->select('nsclhasprogramas.*','programa_formacions.denominacion_prog', 'programa_formacions.codigo_prog', 'nscls.id')
        ->where('nsclhasprogramas.nscl_id','=', $id)
        ->get();

        $codigounico = DB::table('nsclhasprogramas')
        ->join('programa_formacions', 'programa_formacions.id', '=', 'nsclhasprogramas.programa_id')
        ->select('programa_formacions.codigo_prog')
        ->get();

        return view('Nscl/detalle', compact('detallenscl', 'infoprograma', 'listaagregadas', 'codigounico'));
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
        return redirect('ProgramaFormacion/view')->with('hecho', 'guardado');

    }


    public function AgregarPrograma(Request $programa)
    {   
        $jd=$programa->programaId;

            for($i=0;$i<count($jd); $i++){
                $instancianorma2= new App\nsclhasprograma();
                $instancianorma2-> programa_id = $jd[$i];
                $instancianorma2 -> nscl_id = $programa -> nscl_id;
                $instancianorma2 -> save();
            }
        return redirect('Nscl/view')->with('hecho', 'guardado');

    }



    // public function Agregadas()
    // {
    //     $listaagregadas = DB::table('nsclhasprogramas')
    //     ->join('programa_formacions', 'programa_formacions.id', '=', 'nsclhasprogramas.programa_id')
    //     ->join('campo_ocupacionals', 'campo_ocupacionals.id','=','programa_formacions.campo_ocupacional_id')
    //     ->join('nscls', 'nscls.id', '=', 'nsclhasprogramas.nscl_id')
    //     ->select('programa_formacions.programa_id', 'nscls.titulo')
    //     ->where('nsclhasprogramas.programa_id','=', $id)
    //     ->get();

    //     return view('ProgramaFormacion/detalle', compact('listaagregadas'));
    // }
   
}
