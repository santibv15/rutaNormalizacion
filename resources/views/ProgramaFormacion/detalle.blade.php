@extends('layouts.app')

@section('contenido')
<section id="basic-input">
<div class="row">
    <div class="card">
<br>
<div class="detalles">
    <div class="fila">
        <div class="columna">
            <div class="header">Denominacion: </div>
            <div class="contenido">{{$detalleprograma->denominacion_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Codigo: </div>
            <div class="contenido">{{$detalleprograma->codigo_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Fecha Inicio: </div>
            <div class="contenido">{{$detalleprograma->fech_ini_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Fecha final: </div>
            <div class="contenido">{{$detalleprograma->fech_ini_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Etapa Electiva: </div>
            <div class="contenido">{{$detalleprograma->eta_electiva}}</div>
        </div>

        <div class="columna">
            <div class="header">Etapa productiva: </div>
            <div class="contenido">{{$detalleprograma->eta_productiva}}</div>
        </div>
        
        <div class="columna">
            <div class="header">Etapa Total: </div>
            <div class="contenido">{{$detalleprograma->eta_total}}</div>
        </div>

        <div class="columna">
            <div class="header">Tipo programa : </div>
            <div class="contenido">{{$detalleprograma->tipo_programa_id}}</div>
        </div>

        <div class="columna">
            <div class="header">Campo ocupacional: </div>
            <div class="contenido">{{$detalleprograma->campo_ocupacional_id}}</div>
        </div>
       

    </div>
    <br>


    <form action="{{route('AgregarNorma')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agregar Norma NSCL </h4>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">

                                <input type="hidden" name="programa_id" value="{{$detalleprograma->id}}">

                                <label class="form-label" for="nscl_id">Normas : </label>

                                <select name="nscl_id" id="nscl_id"  class="form-control" required>
                                    <option value="">seleccione Norma</option>
                                    @foreach ($infonorma as $norma)
                                    <option id="selector:" value="{{$norma->id}}">{{$norma->titulo}}</option>
                                    @endforeach
                                </select>
                                </select>
                                <div class="invalid-tooltip">El "Campo Ocupacional" Categoria es Obligatorio.</div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <br>
                                <button onclick="agregarnorma()" class="btn btn-primary" type="submit">Guardar</button>
                              
                            </div>
                         </div>
                        

                         
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
</form>

<table class="table" id="tablaprincipal">
    
    <thead>
        <tr>
            <th>Nombre Norma</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>hola</td>
            <td>hola</td>
        </tr>
    </tbody>
</table>

<br>    

</div>
</div>
</div>
</section>


@include('layouts.Footer')
@endsection

