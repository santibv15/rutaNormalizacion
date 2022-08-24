



@extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdRegional')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$updateregional->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Regionales </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">nombre de regional: </label>
                                <input type="text" class="form-control" name="nombre_region" id="basicInput" value="{{$updateregional->nombre_region}}"/>
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
@endsection