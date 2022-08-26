@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{route('InsertNscl')}}" method="POST" enctype="multipart/form-data" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar NSCL </h4>
                </div>
                <div class="card-body">
                    <div class="row">


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="titulo">Titulo: </label>
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder=" ingrese el titulo" required />
                                <div class="invalid-tooltip">El valor "Titulo" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="codigo_nscl">Codigo: </label>
                                <input type="text" class="form-control" name="codigo_nscl" id="codigo_nscl" placeholder=" ingrese el codigo" required/>
                                <div class="invalid-tooltip">El valor "Codigo" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="version">Version: </label>
                                <input type="text" class="form-control" name="version" id="version" placeholder=" ingrese la version" required/>
                                <div class="invalid-tooltip">El valor "Version" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fecha_publicacion">Fecha de publicacion: </label>
                                <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" required/>
                                <div class="invalid-tooltip">El valor "Fecha de publicacion" es Obligatorio.</div>
                            </div>
                        </div>
                        

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fecha_revision">Fecha de revision: </label>
                                <input type="date" class="form-control" name="fecha_revision" id="fecha_revision" required />
                                <div class="invalid-tooltip">El valor "Fecha de revision" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fecha_aprobacion">Fecha de aprobacion: </label>
                                <input type="date" class="form-control" name="fecha_aprobacion" id="fecha_aprobacion" required/>
                                <div class="invalid-tooltip">El valor "Fecha de aprobacion" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="n_aprobacion">numero de aprobacion: </label>
                                <input type="text" class="form-control" name="n_aprobacion" id="n_aprobacion"  placeholder="ingrese el numero de aprobacion" required/>
                                <div class="invalid-tooltip">El valor "Numero de aprobacion" es Obligatorio.</div>
                            </div>
                        </div>



                       


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="mesa_sectorial">Mesa sectorial: </label>
                                <select name="mesa_sectorial" id="mesa_sectorial"  class="form-control" required>
                                    <option value="">seleccione una mesa</option>
                                    @foreach ($infomesa as $mesa)
                                   <option value="{{$mesa->id}}">{{$mesa->nombre_sector}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Mesa sectorial" Categoria es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="estado_producto">Estado Producto: </label>
                                <select name="estado_producto" id="estado_producto"  class="form-control" required>
                                    <option value="">seleccione estado del producto</option>
                                    @foreach ($infoestadop as $estadop)
                                    <option value="{{$estadop->id}}">{{$estadop->tipo_estado}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Estado producto" Categoria es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="centro_formacion">Centro Formacion: </label>
                                <select name="centro_formacion" id="centro_formacion"  class="form-control" required>
                                    <option value="">seleccione un centro</option>
                                    @foreach ($infocentrof as $centrof)
                                    <option value="{{$centrof->id}}">{{$centrof->nombre}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Centro formacion" Categoria es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="categoria"> Categoria: </label>
                                <select name="categoria" id="categoria"  class="form-control" required>
                                    <option value="">seleccione un categoria</option>
                                    @foreach ($infocategoria as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->tipo_categoria}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Categoria" Categoria es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                            <label for="documento" class="form-label">PDF:</label>
                            <input class="form-control" id="documento" name="documento" type="file"  accept=".pdf" required/>
                            <div class="invalid-tooltip">El "PDF" Categoria es Obligatorio.</div>
                        </div>
                      
                    


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <br>
                                <button class="btn btn-primary" type="submit">Registrar</button>
                              
                            </div>
                         </div>
                        

                         
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
</form>
</section>
@include('layouts.Footer')
@endsection 




{{-- 
@extends('menu');
@section('contenido')



<form action="{{route('InsertNscl')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="titulo">titulo: </label>
    <input type="text" name="titulo" placeholder="ingrese titulo de nscl">
    <label for="codigo">Codigo:  </label>
    <input type="text" name="codigo_nscl" placeholder="ingrese el codigo nscl">
    <label for="version">version: </label>
    <input type="text" name="version" placeholder="ingrese version de nscl">
    <label for="fecha_publicacion">Fecha de publicacion:</label>
    <input type="date" name="fecha_publicacion">
    <label for="fecha_revision">fecha de revision: </label>
    <input type="date" name="fecha_revision">
    <label for="fecha_aprobacion">fecha de aprobacion: </label>
    <input type="date" name="fecha_aprobacion">
    <label for="n_aprobacion">numero aprobacion: </label>
    <input type="text" name="n_aprobacion" placeholder="ingrese numero de aprobacion">
   
   
    <label for="documentos"> adjunte pdf: </label>
    <input type="file" name="documento" accept=".pdf">

    <label for="mesa">mesa sectorial: </label>
    <select name="mesa_sectorial" id="ui search dropdown" >
        <option value="">seleccione un mesa</option>
        @foreach ($infomesa as $mesa)
        <option value="{{$mesa->id}}">{{$mesa->nombre_sector}}</option>
        @endforeach
    </select>




    <label for="estado">estado producto:</label>
    <select name="estado_producto" id="ui search dropdown" >
        <option value="">seleccione estado del producto</option>
        @foreach ($infoestadop as $estadop)
        <option value="{{$estadop->id}}">{{$estadop->tipo_estado}}</option>
        @endforeach
    </select>

    <label for="centro">centro de formacion: </label>
    <select name="centro_formacion" id="ui search dropdown" >
        <option value="">seleccione un centro</option>
        @foreach ($infocentrof as $centrof)
        <option value="{{$centrof->id}}">{{$centrof->nombre}}</option>
        @endforeach
    </select>
    <label for="categoria">categoria: </label>
    <select name="categoria" id="ui search dropdown" >
        <option value="">seleccione un categoria</option>
        @foreach ($infocategoria as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->tipo_categoria}}</option>
        @endforeach
    </select>
    <input type="submit" value="registrar">

     
</form>

<style>
    label, select, input{
        margin: 10px;
    }

    
</style>
@endsection  --}}