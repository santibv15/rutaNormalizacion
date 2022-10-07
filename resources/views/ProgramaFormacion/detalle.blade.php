@extends('layouts.app')

@section('contenido')
<section id="basic-input">



<div class="row">
    <div class="card">
<br>
@foreach ($detalleprograma as $programa)
    

<div class="detalles">
    <div class="fila">
        <div class="columna">
            <div class="header">Denominacion: </div>
            <div class="contenido">{{$programa->denominacion_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Codigo: </div>
            <div class="contenido">{{$programa->codigo_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Fecha Inicio: </div>
            <div class="contenido">{{$programa->fech_ini_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Fecha final: </div>
            <div class="contenido">{{$programa->fech_fin_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Etapa Electiva: </div>
            <div class="contenido">{{$programa->eta_electiva}} meses</div>
        </div>

        <div class="columna">
            <div class="header">Etapa productiva: </div>
            <div class="contenido">{{$programa->eta_productiva}} meses</div>
        </div>
        
        <div class="columna">
            <div class="header">Etapa Total: </div>
            <div class="contenido">{{$programa->eta_total}} meses</div>
        </div>

        <div class="columna">
            <div class="header">Tipo programa : </div>
            <div class="contenido">{{$programa->nombre_tipo_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Campo ocupacional: </div>
            <div class="contenido">{{$programa->nombre_campo_ocu}}</div>
        </div>
       
        @endforeach
    </div>
    <br>

    <table  class="datatables-basic table" id="tablanormas">
        <h3>Normas Asociadas</h3>
        <br>
        <thead>
        
            <th>codigo norma</th>
            <th>Titulo</th>
        </thead>
        @foreach ($listaagregadas as $agregada)
        <tbody>
         
       
         <td id="dato">{{$agregada->codigo_nscl}}</td>
         <td >{{$agregada->titulo}}</td>
        
         
        </tbody>
        @endforeach
    </table>
    
    <br><br><br>


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
                                @foreach ($detalleprograma as $programa)
                                <input type="hidden" name="programa_id" value="{{$programa->id}}">
                                @endforeach
                                

                                <label class="form-label" for="nscl_id">Normas : </label>

                                <select name="nscl_id" id="selector"  class="form-control" required>
                                    <option>seleccione norma</option>
                                    @foreach ($infonorma as $norma)
                                    <option  ><span class="pe" id="pe" type="hidden" style="color: white !important;">{{$norma->id}}</span> {{$norma->codigo_nscl}} {{$norma->titulo}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "norma"  es Obligatorio.</div>
                            </div>



                        </div>
                        
                            <div class="mb-1">
                                <br>
                                <button onclick="agregarnorma()" class="btn btn-primary" type="button">agregar</button>
                              
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



</div>
</div>
</div>

</section>


@include('layouts.Footer')

@endsection

