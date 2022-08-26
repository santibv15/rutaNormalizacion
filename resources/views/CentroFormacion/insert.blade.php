@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('InsertCentrof')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar Centro de Formacion </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="nombre">Centro de formacion: </label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder=" Ingrese el nombre del centro"  required/>
                                <div class="invalid-tooltip">El valor "Centro de formacion" es Obligatorio.</div>
                            </div>
                        </div>

                         
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="regional_id">Regional: </label>
                                        <select name="regional_id" id="regional_id"  class="form-control" required>
                                            <option value="">Seleccione un regional</option>
                                            @foreach ($inforegional as $regional)
                                           <option value="{{$regional->id}}">{{$regional->nombre_region}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-tooltip">El valor "Regional" es Obligatorio.</div>
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








