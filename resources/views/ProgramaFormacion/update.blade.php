
@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdProgramaf')}}" method="POST" enctype="multipart/form-data" class="needs-validation"  novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$updateprogramaf->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Programa Formacion </h4>
                </div>
                <div class="card-body">
                    <div class="row">


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="denominacion_prog">Denominacion: </label>
                                <input type="text" class="form-control" name="denominacion_prog" id="denominacion_prog" value="{{$updateprogramaf->denominacion_prog}}" required/>
                                <div class="invalid-tooltip">El "Denominacion" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="codigo_prog">Codigo: </label>
                                <input type="text" class="form-control" name="codigo_prog" id="codigo_prog" value="{{$updateprogramaf->codigo_prog}}" required/>
                                <div class="invalid-tooltip">El "Codigo" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fech_ini_prog">Fecha Inicio: </label>
                                <input type="date" class="form-control" name="fech_ini_prog" id="fech_ini_prog" value="{{$updateprogramaf->fech_ini_prog}}" required />
                                <div class="invalid-tooltip">El "Fecha Inicio" es Obligatorio.</div>
                            </div>
                        </div>
                        

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="eta_electiva">Etapa Electiva: </label>
                                <input type="number" class="form-control" name="eta_electiva" id="eta_electiva" value="{{$updateprogramaf->eta_electiva}}" required/>
                                <div class="invalid-tooltip">El "Etapa Electiva" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="eta_productiva">Etapa Productiva: </label>
                                <input type="number" class="form-control" name="eta_productiva" id="eta_productiva" value="{{$updateprogramaf->eta_productiva}}" required/>
                                <div class="invalid-tooltip">El "Etapa Productiva" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="tipo_programa">Tipo Programa: </label>
                                <select name="tipo_programa" id="tipo_programa"  class="form-control" required>
                                    @foreach ($infotipopro as $tipopro)
                                   <option value="{{$tipopro->id}}"  @if ($tipopro->id == $updateprogramaf->nombre_tipo_prog) selected @endif>{{$tipopro->nombre_tipo_prog}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Tipo Programa" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="campo_ocupacional">Campo Ocupacional: </label>
                                <select name="campo_ocupacional" id="campo_ocupacional"  class="form-control" required>
 
                                    @foreach ($infocampoocu as $campoocu)
                                    <option value="{{$campoocu->id}}"  @if ($campoocu->id == $updateprogramaf->nombre_campo_ocu) selected @endif>{{$campoocu->nombre_campo_ocu}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Campo Ocupacional" es Obligatorio.</div>
                            </div>
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
@include('layouts.Footer')
@endsection 
