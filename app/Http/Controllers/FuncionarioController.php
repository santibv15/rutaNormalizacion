<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FuncionarioController extends Controller
{
    public function InsertFuncionario (Request $funcionario){
        $instanciafuncionario = new App\funcionario;
        $instanciafuncionario -> cedula_func = $funcionario -> cedula_func;
        $instanciafuncionario -> nombre_func = $funcionario -> name;
        $instanciafuncionario -> correo_per_func = $funcionario -> email;
        $instanciafuncionario -> correo_insti_func = $funcionario -> correo_insti_func;
        $instanciafuncionario -> tel_func = $funcionario -> tel_func;
        $instanciafuncionario -> rol_id = $funcionario -> rol;

        $instanciafuncionario -> save();

        return redirect('MesaSectorial/view') ->with('hecho', 'mesa regitrada');

    }


}
