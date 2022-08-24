


@extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdMesa')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$updatemesa->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Mesa sectorial </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Categoria: </label>
                                <input type="text" class="form-control" name="nombre_sector" id="basicInput" value="{{$updatemesa->nombre_sector}}"/>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="helperText">Codigo: </label>
                                <input type="text" id="helperText" name="codigo" class="form-control" value="{{$updatemesa->codigo}}" />
                              
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