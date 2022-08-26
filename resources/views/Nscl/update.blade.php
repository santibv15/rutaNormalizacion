



@extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdNscl')}}" method="POST" enctype="multipart/form-data" class="needs-validation"  novalidate>
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
                                <label class="form-label" for="titulo">Titulo: </label>
                                <input type="text" class="form-control" name="titulo" id="titulo" value="{{$updatenscl->titulo}}" required/>
                                <div class="invalid-tooltip">El "Titulo" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="codigo_nscl">Codigo: </label>
                                <input type="text" class="form-control" name="codigo_nscl" id="codigo_nscl" value="{{$updatenscl->codigo_nscl}}" required/>
                                <div class="invalid-tooltip">El "Codigo" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="version">Version: </label>
                                <input type="text" class="form-control" name="version" id="version" value="{{$updatenscl->version}}" required />
                                <div class="invalid-tooltip">El "Version" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fecha_publicacion">Fecha de publicacion: </label>
                                <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion"  value="{{$updatenscl->fecha_publicacion}}" required/>
                                <div class="invalid-tooltip">El "Fecha de publicacion" es Obligatorio.</div>
                            </div>
                        </div>
                        

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fecha_revision">Fecha de revision: </label>
                                <input type="date" class="form-control" name="fecha_revision" id="fecha_revision" value="{{$updatenscl->fecha_revision}}" required/>
                                <div class="invalid-tooltip">El "Fecha de revision" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fecha_aprobacion">Fecha de aprobacion: </label>
                                <input type="date" class="form-control" name="fecha_aprobacion" id="fecha_aprobacion" value="{{$updatenscl->fecha_aprobacion}}" required/>
                                <div class="invalid-tooltip">El "Fecha de aprobacion" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="n_aprobacion">numero de aprobacion: </label>
                                <input type="text" class="form-control" name="n_aprobacion" id="n_aprobacion"  value="{{$updatenscl->n_aprobacion}}" required/>
                                <div class="invalid-tooltip">El "Numero de aprobacion" es Obligatorio.</div>
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
                                <div class="invalid-tooltip">El "Mesa sectorial" es Obligatorio.</div>
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
                                <div class="invalid-tooltip">El "Estado producto" es Obligatorio.</div>
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
                                <div class="invalid-tooltip">El "Centro formacion" es Obligatorio.</div>
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
                                <div class="invalid-tooltip">El "Categoria" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                            <label for="documento" class="form-label">PDF:</label>
                            <input class="form-control" name="documento" type="file" id="documento"  accept=".pdf" required />
                            <div class="invalid-tooltip">El "PDF" es Obligatorio.</div>
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
