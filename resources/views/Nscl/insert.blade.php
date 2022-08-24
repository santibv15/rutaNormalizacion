 @extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{route('InsertNscl')}}" method="POST" enctype="multipart/form-data">
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
                                <label class="form-label" for="basicInput">Titulo: </label>
                                <input type="text" class="form-control" name="titulo" id="basicInput" placeholder=" ingrese el titulo" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Codigo: </label>
                                <input type="text" class="form-control" name="codigo_nscl" id="basicInput" placeholder=" ingrese el codigo" />
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Version: </label>
                                <input type="text" class="form-control" name="version" id="basicInput" placeholder=" ingrese la version" />
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Fecha de publicacion: </label>
                                <input type="date" class="form-control" name="fecha_publicacion" id="basicInput" />
                            </div>
                        </div>
                        

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Fecha de revision: </label>
                                <input type="date" class="form-control" name="fecha_revision" id="basicInput" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Fecha de aprobacion: </label>
                                <input type="date" class="form-control" name="fecha_aprobacion" id="basicInput" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">numero de aprobacion: </label>
                                <input type="text" class="form-control" name="n_aprobacion" id="basicInput"  placeholder="ingrese el numero de aprobacion"/>
                            </div>
                        </div>



                       


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Mesa sectorial: </label>
                                <select name="mesa_sectorial" id="ui search dropdown"  class="form-control">
                                    <option value="">seleccione una mesa</option>
                                    @foreach ($infomesa as $mesa)
                                   <option value="{{$mesa->id}}">{{$mesa->nombre_sector}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Estado Producto: </label>
                                <select name="estado_producto" id="ui search dropdown"  class="form-control">
                                    <option value="">seleccione estado del producto</option>
                                    @foreach ($infoestadop as $estadop)
                                    <option value="{{$estadop->id}}">{{$estadop->tipo_estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Centro Formacion: </label>
                                <select name="centro_formacion" id="ui search dropdown"  class="form-control">
                                    <option value="">seleccione un centro</option>
                                    @foreach ($infocentrof as $centrof)
                                    <option value="{{$centrof->id}}">{{$centrof->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput"> Categoria: </label>
                                <select name="categoria" id="ui search dropdown"  class="form-control">
                                    <option value="">seleccione un categoria</option>
                                    @foreach ($infocategoria as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->tipo_categoria}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                            <label for="documentos" class="form-label">PDF:</label>
                            <input class="form-control" name="documento" type="file"  accept=".pdf" />
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