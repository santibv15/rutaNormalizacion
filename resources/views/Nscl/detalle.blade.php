@extends('layouts.app')

@section('contenido')
<section id="basic-input">



<div class="row">
    <div class="card">
<br>
@foreach ($detallenscl as $norma)
    

<div class="detalles">
    <div class="fila">
        <div class="columna">
            <div class="header">Titulo: </div>
            <div class="contenido">{{$norma->titulo}}</div>
        </div>

        <div class="columna">
            <div class="header">Codigo: </div>
            <div class="contenido">{{$norma->codigo_nscl}}</div>
        </div>

        <div class="columna">
            <div class="header">Version: </div>
            <div class="contenido">{{$norma->version}}</div>
        </div>

        <div class="columna">
            <div class="header">Mesa: </div>
            <div class="contenido">{{$norma->nombre_sector}}</div>
        </div>

        <div class="columna">
            <div class="header">Tipo estado: </div>
            <div class="contenido">{{$norma->tipo_estado}}</div>
        </div>

        <div class="columna">
            <div class="header">Centro Formacion: </div>
            <div class="contenido">{{$norma->nombre}}</div>
        </div>
        
        <div class="columna">
            <div class="header">Categoria: </div>
            <div class="contenido">{{$norma->tipo_categoria}}</div>
        </div>

        <div class="columna">
            <div class="header">Fecha Publicacion : </div>
            <div class="contenido">{{$norma->fecha_publicacion}}</div>
        </div>

        <div class="columna">
            <div class="header">Fecha Revision: </div>
            <div class="contenido">{{$norma->fecha_revision}}</div>
        </div>

        <div class="columna">
            <div class="header">Fecha Aprobacion: </div>
            <div class="contenido">{{$norma->fecha_aprobacion}}</div>
        </div>

        <div class="columna">
            <div class="header">Numero Aprobacion: </div>
            <div class="contenido">{{$norma->n_aprobacion}}</div>
        </div>
        @endforeach
        <br><br>
        <table  class="datatables-basic table" id="tablaprograma">
            <h3>Normas Asociadas</h3>
            <br>
            <thead>

                <th>codigo Programa</th>
                <th>Denominacion</th>
            </thead>
            @foreach ($listaagregadas as $agregada)
            <tbody>
             

             <td>{{$agregada->codigo_prog}}</td>
             <td>{{$agregada->denominacion_prog}}</td>
            
             
            </tbody>
            @endforeach
        </table>

        <br><br><br>

        
    <form action="{{route('AgregarPrograma')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agregar Programa de Formacion </h4>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-4 col-md-6 col-12">
                            


                            
                            <div class="mb-1">
                                @foreach ($detallenscl as $norma)
                                <input type="hidden" name="nscl_id" value="{{$norma->id}}">
                                @endforeach
                                

                                <label class="form-label" for="programa_id">Programas : </label>

                                <select name="programa_id" id="selectordos"  class="form-control" required>
                                    <option>seleccione programa</option>
                                    @foreach ($infoprograma as $programa)
                                    <option  ><span class="pe" id="pe" type="hidden" style="color: white !important;">{{$programa->id}}</span> {{$programa->codigo_prog}} {{$programa->denominacion_prog}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "programa"  es Obligatorio.</div>
                            </div>



                        </div>
                        
                            <div class="mb-1">
                                <br>
                                <button onclick="agregarprograma()" class="btn btn-primary" type="button">agregar</button>
                              
                            </div>
                         
                        <br><br> 
                        <table id="ruta" class="datatables-basic table">
                            <thead>
                                <th>Codigo</th>
                                <th>Nombre de la norma</th>
                                <th>Accion</th>
                            </thead>
                            <tbody>
                             <td></td>
                             <td></td>
                             <td></td>
                            </tbody>
                        </table>
                         
                    </div>
                    <br><br><br>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="mb-1">
                            <br>
                            <button  class="btn btn-primary" type="submit">guardar</button>
                          
                        </div>
                     </div>
                </div>
            </div>
        </div>
        
    </div>
   
</form>


<br><br><br>




    @include('layouts.Footer')
    @endsection