



@extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdNscl')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$updatenscl->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar NSCL </h4>
                </div>
                <div class="card-body">
                    <div class="row">


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Titulo: </label>
                                <input type="text" class="form-control" name="titulo" id="basicInput" value="{{$updatenscl->titulo}}" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Codigo: </label>
                                <input type="text" class="form-control" name="codigo_nscl" id="basicInput" value="{{$updatenscl->codigo_nscl}}"/>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Version: </label>
                                <input type="text" class="form-control" name="version" id="basicInput" value="{{$updatenscl->version}}" />
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Fecha de publicacion: </label>
                                <input type="date" class="form-control" name="fecha_publicacion" id="basicInput"  value="{{$updatenscl->fecha_publicacion}}"/>
                            </div>
                        </div>
                        

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Fecha de revision: </label>
                                <input type="date" class="form-control" name="fecha_revision" id="basicInput" value="{{$updatenscl->fecha_revision}}"/>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Fecha de aprobacion: </label>
                                <input type="date" class="form-control" name="fecha_aprobacion" id="basicInput" value="{{$updatenscl->fecha_aprobacion}}"/>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">numero de aprobacion: </label>
                                <input type="text" class="form-control" name="n_aprobacion" id="basicInput"  value="{{$updatenscl->n_aprobacion}}"/>
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
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                              
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
