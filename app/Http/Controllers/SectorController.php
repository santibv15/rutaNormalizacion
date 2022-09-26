<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SectorController extends Controller
{
    public function InsertSector(Request $sector)
    {
        $instanciasector = new App\sectore;
        $instanciasector -> tipo_sec_prog = $sector -> tipo_sec_prog;
        $instanciasector -> save();

        return redirect('Sectores/view')->with('hecho', 'Registrado');
    }

    
    public function ViewSector(){
        $objetoretornado = App\sectore::All();
        return view('Sectores/view', compact('objetoretornado'));
    }

    public function resuljson(){
        $verp =  App\sectore::All();
        $datos = array('data' => $verp);
        return $datos;
    }

    
    public function UpdateSector($id)
    {
        $updatesector = App\sectore::FindOrFail($id);
        return view('Sectores/update', compact('updatesector'));


    }

    public function UpdateBdSector(Request $sector)
    {
        $instanciasector =  App\sectore::FindOrFail($sector->id);
        $instanciasector -> tipo_sec_prog = $sector -> tipo_sec_prog;
        $instanciasector -> save();

        return redirect('Sectores/view')->with('hecho', 'actualizado');

    }

    public function DeleteSector($id)
    {
        $deletesector = App\sectore::FindOrFail($id);
        $deletesector ->delete();

        return redirect('Sectores/view')->with('hecho', 'eliminado');
    }
}


