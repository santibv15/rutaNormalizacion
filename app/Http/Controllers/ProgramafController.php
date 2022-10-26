<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App;
class ProgramafController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ViewInsertProgramaf ()
    {
        $infotipopro = App\tipo_programa::All();
        $infocampoocu = App\campo_ocupacional::All();
        return View('ProgramaFormacion/insert', compact('infotipopro','infocampoocu'));
        
    }

    public function InsertProgramaf(Request $programaf)
    {
        $instanciaprogramaf= new App\programa_formacion;
        
        $instanciaprogramaf = new App\programa_formacion();
        $instanciaprogramaf -> denominacion_prog = $programaf ->denominacion_prog;
        $instanciaprogramaf -> codigo_prog = $programaf ->codigo_prog;
        $instanciaprogramaf -> fech_ini_prog = $programaf ->fech_ini_prog;
        $instanciaprogramaf -> fech_fin_prog = date("y-m-d", strtotime($programaf ->fech_ini_prog."+ 7 years"));
        $instanciaprogramaf -> eta_electiva = $programaf ->eta_electiva;
        $instanciaprogramaf -> eta_productiva = $programaf ->eta_productiva;
        $instanciaprogramaf -> eta_total = $programaf -> eta_electiva + $programaf ->eta_productiva;
        $instanciaprogramaf -> tipo_programa_id = $programaf ->tipo_programa;
        $instanciaprogramaf -> campo_ocupacional_id = $programaf ->campo_ocupacional;
        $instanciaprogramaf -> save();

        return redirect('ProgramaFormacion/view')->with('hecho', 'guardado');

    }

    public function ViewProgramaf()
    {
        $objetoretornado = DB::table('programa_formacions')
                            ->join('tipo_programas', 'tipo_programas.id', '=', 'programa_formacions.tipo_programa_id')
                            ->join('campo_ocupacionals', 'campo_ocupacionals.id','=','programa_formacions.campo_ocupacional_id')
                            ->select('programa_formacions.*','programa_formacions.denominacion_prog', 'tipo_programas.nombre_tipo_prog', 'campo_ocupacionals.nombre_campo_ocu')
                            ->get();

                            
        return view('ProgramaFormacion/view', compact('objetoretornado'));
        
    }



    public function resuljson(){
        $verp = DB::table('programa_formacions')
        ->join('tipo_programas', 'tipo_programas.id', '=', 'programa_formacions.tipo_programa_id')
        ->join('campo_ocupacionals', 'campo_ocupacionals.id','=','programa_formacions.campo_ocupacional_id')
        ->select('programa_formacions.*','programa_formacions.denominacion_prog', 'tipo_programas.nombre_tipo_prog', 'campo_ocupacionals.nombre_campo_ocu')
        ->get();
        $datos = array('data' => $verp);
        return $datos;
    }

    public function UpdateProgramaf($id)
    {
        $updateprogramaf = App\programa_formacion::FindOrFail($id);
        $infotipopro = App\tipo_programa::All();
        $infocampoocu = App\campo_ocupacional::All();
        

        
        return view('ProgramaFormacion/update', compact('updateprogramaf','infotipopro','infocampoocu'));


    }
    public function UpdateBdProgramaf(Request $programaf)
    {
        $instanciaprogramaf = App\programa_formacion::FindOrFail($programaf->id);
        $instanciaprogramaf -> denominacion_prog = $programaf ->denominacion_prog;
        $instanciaprogramaf -> codigo_prog = $programaf ->codigo_prog;
        $instanciaprogramaf -> fech_ini_prog = $programaf ->fech_ini_prog;
        $instanciaprogramaf -> fech_fin_prog = date("y-m-d", strtotime($programaf ->fech_ini_prog."+ 7 years"));
        $instanciaprogramaf -> eta_electiva = $programaf ->eta_electiva;
        $instanciaprogramaf -> eta_productiva = $programaf ->eta_productiva;
        $instanciaprogramaf -> eta_total = $programaf -> eta_electiva + $programaf ->eta_productiva;
        $instanciaprogramaf -> tipo_programa_id = $programaf ->tipo_programa;
        $instanciaprogramaf -> campo_ocupacional_id = $programaf ->campo_ocupacional;
        $instanciaprogramaf -> save();
        
        // if (asset($ruta)){
        //     $ruta = App\nscl::FindOrFail($id);
        //     return view('Nscl/update', compact('ruta'));

        // };

        // if isset(request->){} para el pdf
        

        return redirect('ProgramaFormacion/view')->with('hecho', 'actualizado');

    }



    public function DeleteProgramaf($id)
    {
        $deleteprogramaf = App\programa_formacion::FindOrFail($id);
        $deleteprogramaf->delete();
        return redirect('ProgramaFormacion/view')->with('hecho', 'eliminado');
    }

}
