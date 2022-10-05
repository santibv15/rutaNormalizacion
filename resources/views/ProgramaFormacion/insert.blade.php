@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{route('InsertProgramaf')}}" method="POST" enctype="multipart/form-data" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar Programa Formacion </h4>
                </div>
                <div class="card-body">
                    <div class="row">


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="denominacion_prog">Denominacion: </label>
                                <input type="text" class="form-control" name="denominacion_prog" id="denominacion_prog" placeholder=" ingrese denominacion" required />
                                <div class="invalid-tooltip">El valor "Denominacion" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="codigo_prog">Codigo: </label>
                                <input type="text" class="form-control" name="codigo_prog" id="codigo_prog" placeholder=" ingrese el codigo" required/>
                                <div class="invalid-tooltip">El valor "Codigo" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="fech_ini_prog">Fecha de Inicio programa: </label>
                                <input type="date" class="form-control" name="fech_ini_prog" id="fech_ini_prog" required/>
                                <div class="invalid-tooltip">El valor "Fecha de Inicio" es Obligatorio.</div>
                            </div>
                        </div>
                        

                       

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="eta_electiva">Etapa Electiva: </label>
                                <input type="number" class="form-control" name="eta_electiva" id="eta_electiva"  placeholder="ingrese la etapa electiva (meses)" required/>
                                <div class="invalid-tooltip">El valor "Etapa Electiva" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="eta_productiva">Etapa Productiva: </label>
                                <input type="number" class="form-control" name="eta_productiva" id="eta_productiva"  placeholder="ingrese la etapa productiva (meses)" required/>
                                <div class="invalid-tooltip">El valor "Etapa Electiva" es Obligatorio.</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="tipo_programa">Tipo Programa: </label>
                                <select name="tipo_programa" id="tipo_programa"  class="form-control" required>
                                    <option value="">seleccione un tipo de programa</option>
                                    @foreach ($infotipopro as $tipopro)
                                   <option value="{{$tipopro->id}}">{{$tipopro->nombre_tipo_prog}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Tipo Programa" Categoria es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="campo_ocupacional">Campo Ocupacional: </label>
                                <select name="campo_ocupacional" id="campo_ocupacional"  class="form-control" required>
                                    <option value="">seleccione Campo Ocupacional</option>
                                    @foreach ($infocampoocu as $campoocu)
                                    <option value="{{$campoocu->id}}">{{$campoocu->nombre_campo_ocu}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">El "Campo Ocupacional" Categoria es Obligatorio.</div>
                            </div>
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
