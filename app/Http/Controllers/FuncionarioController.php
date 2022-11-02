<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App;

class FuncionarioController extends Controller
{
    public function InsertFuncionario (Request $data){
        $instanciafuncionario = new App\funcionario;
        $instanciafuncionario -> cedula_func = $data -> cedula_func;
        $instanciafuncionario -> nombre_func = $data -> name;
        $instanciafuncionario -> correo_per_func = $data -> email;
        $instanciafuncionario -> correo_insti_func = $data -> correo_insti_func;
        $instanciafuncionario -> tel_func = $data -> tel_func;
        $instanciafuncionario -> rol_id = $funcionario -> rol;

        $instanciafuncionario -> save();
        
        return redirect('MesaSectorial/view') ->with('hecho', 'mesa regitrada');
        return route('register');

    }


}
