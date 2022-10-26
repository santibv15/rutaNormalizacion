<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MesaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewInsert(){
        return view ('MesaSectorial/insert');
    }


    public function InsertMesa (Request $mesa){
        $instanciamesa = new App\mesa_sectorial;
        $instanciamesa -> nombre_sector = $mesa -> nombre_sector;
        $instanciamesa -> codigo = $mesa -> codigo;
        $instanciamesa -> save();

        return redirect('MesaSectorial/view') ->with('hecho', 'mesa regitrada');

    }

    public function ViewMesa (){
        $objetoretornado = App\mesa_sectorial::All();
        return view('MesaSectorial/view', compact('objetoretornado'));
    }


    public function resuljson(){
        $verp =  App\mesa_sectorial::All();
        $datos = array('data' => $verp);
        return $datos;
    }


    public function UpdateMesa($id)
    {
        $updatemesa = App\mesa_sectorial::FindOrFail($id);
        return view('MesaSectorial/update', compact('updatemesa'));


    }

    public function UpdateBdMesa(Request $mesa)
    {
        $instanciamesa = App\mesa_sectorial::FindOrFail($mesa->id);
        $instanciamesa -> nombre_sector = $mesa ->nombre_sector;
        $instanciamesa -> codigo = $mesa -> codigo;
        $instanciamesa -> save();

        return redirect('MesaSectorial/view')->with('hecho', 'actualizado');

    }

    public function DeleteMesa($id){
        $deletemesa = App\mesa_sectorial::FindOrFail($id);
        $deletemesa -> delete();

        return redirect('MesaSectorial/view')->with('hecho', 'eliminado');

    }
}
