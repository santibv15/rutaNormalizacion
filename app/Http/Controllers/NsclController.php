<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App;
class NsclController extends Controller
{
    public function ViewInsertNscl ()
    {
        $infomesa = App\mesa_sectorial::All();
        $infoestadop = App\estado_producto::All();
        $infocentrof = App\centro_formacion::All();
        $infocategoria = App\categoria::All();
        return View('Nscl/insert', compact('infomesa','infoestadop', 'infocentrof', 'infocategoria'));
        
    }

    public function InsertNscl(Request $nscl)
    {
        $ruta = Storage::disk('public')->put('nscl', $nscl->file('documento'));
        $campo = asset($ruta);
        $instancianscl = new App\nscl();
        $instancianscl -> titulo = $nscl ->titulo;
        $instancianscl -> codigo_nscl = $nscl ->codigo_nscl;
        $instancianscl -> version = $nscl -> version;
        $instancianscl -> fecha_publicacion = $nscl -> fecha_publicacion;
        $instancianscl -> fecha_revision = $nscl -> fecha_revision;
        $instancianscl -> fecha_aprobacion = $nscl -> fecha_aprobacion;
        $instancianscl -> n_aprobacion = $nscl -> n_aprobacion;

        $instancianscl -> documento = $campo;
        $instancianscl -> documento_url = $campo;

        $instancianscl -> mesa_sectorial_id = $nscl -> mesa_sectorial;
        $instancianscl -> estado_producto_id = $nscl -> estado_producto;
        $instancianscl -> centro_formacion_id = $nscl -> centro_formacion;
        $instancianscl -> categoria_id = $nscl -> categoria;
        $instancianscl -> save();

        return redirect('Nscl/view')->with('hecho', 'guardado');

    }

    public function ViewNscl()
    {
        $objetoretornado = DB::table('nscls')
                            ->join('mesa_sectorials', 'mesa_sectorials.id', '=', 'nscls.mesa_sectorial_id')
                            ->join('estado_productos', 'estado_productos.id','=','nscls.estado_producto_id')
                            ->join('centro_formacions', 'centro_formacions.id','=','nscls.centro_formacion_id')
                            ->join('categorias', 'categorias.id','=','nscls.categoria_id')
                            ->select('nscls.*','nscls.titulo', 'mesa_sectorials.nombre_sector', 'estado_productos.tipo_estado'
                            , 'centro_formacions.nombre', 'categorias.tipo_categoria')
                            ->get();

                            
        return view('Nscl/view', compact('objetoretornado'));
    }

    public function DeleteNscl($id)
    {
        $deletenscl = App\nscl::FindOrFail($id);
        $deletenscl->delete();
        return redirect('Nscl/view')->with('hecho', 'eliminado');
    }

}
