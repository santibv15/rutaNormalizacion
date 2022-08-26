

@extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdCentrof')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$updatecentrof->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Centro de Formacion </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Centro de formacion: </label>
                                <input type="text" class="form-control" name="nombre" id="basicInput" value="{{$updatecentrof->nombre}}" required/>
                                <div class="invalid-tooltip">El "Centro de formacion" es Obligatorio.</div>
                            </div>
                        </div>

                         
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Regional: </label>
                                        <select name="regional_id" id="ui search dropdown"  class="form-control" required>
                                            <option value="">Seleccione un regional</option>
                                            @foreach ($inforegional as $regional)
                                            
                                           <option value="{{$regional->id}}">{{$regional->nombre_region}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-tooltip">El "Regional" es Obligatorio.</div>
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
@endsection

