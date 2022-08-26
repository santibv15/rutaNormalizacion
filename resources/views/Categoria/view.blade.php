@extends('layouts.app')

@section('contenido')

<div class="ui success mesagge">
   <i class="close icon"></i>
   <div class="header">
      {{session('hecho')}}
   </div>
</div>

<table class="table">
   <thead>
     <tr>
       <th scope="col">Categoria</th>
       <th scope="col">Ambito</th>
       <th scope="col">Opciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $categoria)
          
      
     <tr>
        <td>{{$categoria->tipo_categoria}}</td>
       <td>{{$categoria->ambito}}</td>
       
       <td>
        <a href="{{Route('DeleteCategoria', $categoria->id)}}"><i class='bx bxs-message-square-x'></i></a>
        <a href="{{Route('UpdateCategoria', $categoria->id)}}"><i class='bx bx-rotate-right'></i></a> 
         {{-- <i class='bx bxs-bullseye'></i> --}}
       </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>
 @include('layouts.Footer')
@endsection