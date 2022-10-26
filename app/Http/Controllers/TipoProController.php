<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class TipoProController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewInsert(){
        return view ('CampoOcupacional/insert');
    }
    public function InsertTipoPro(Request $tipo_programa)
    {
        $instanciatipopro = new App\tipo_programa;
        $instanciatipopro -> nombre_tipo_prog = $tipo_programa -> nombre_tipo_prog;
        $instanciatipopro -> titulo_cert_prog = $tipo_programa -> titulo_cert_prog;
        $instanciatipopro -> save();

        return redirect('TipoPrograma/view')->with('hecho', 'Registrado');
    }

    
    public function ViewTipoPro(){
        $objetoretornado = App\tipo_programa::All();
        return view('TipoPrograma/view', compact('objetoretornado'));
    }

    public function resuljson(){
        $verp =  App\tipo_programa::All();
        $datos = array('data' => $verp);
        return $datos;
    }

    
    public function UpdateTipoPro($id)
    {
        $updatetipopro = App\tipo_programa::FindOrFail($id);
        return view('TipoPrograma/update', compact('updatetipopro'));


    }

    public function UpdateBdTipoPro(Request $tipo_programa)
    {
        $instanciatipopro =  App\tipo_programa::FindOrFail($tipo_programa->id);
        $instanciatipopro -> nombre_tipo_prog = $tipo_programa -> nombre_tipo_prog;
        $instanciatipopro -> titulo_cert_prog = $tipo_programa -> titulo_cert_prog;
        $instanciatipopro -> save();

        return redirect('TipoPrograma/view')->with('hecho', 'actualizado');

    }

    public function DeleteTipoPro($id)
    {
        $deletetipopro = App\tipo_programa::FindOrFail($id);
        $deletetipopro ->delete();

        return redirect('TipoPrograma/view')->with('hecho', 'eliminado');
    }
}

