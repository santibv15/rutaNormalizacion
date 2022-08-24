@extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdCategoria')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$updatecategoria->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Categoria</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Categoria: </label>
                                <input type="text" class="form-control" name="tipo_categoria" id="basicInput" value="{{$updatecategoria->tipo_categoria}}"/>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="helperText">Ambito: </label>
                                <input type="text" id="helperText" name="ambito" class="form-control" value="{{$updatecategoria->ambito}}" />
                              
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