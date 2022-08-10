@extends('menu')

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
        <th scope="col">id</th>
       <th scope="col">tip de estado</th>
       <th scope="col">opciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $estadop)
          
      
     <tr>
        <td>{{$estadop->id}}</td>
       <td>{{$estadop->tipo_estado}}</td>
       
       <td>
        <a href="{{Route('DeleteEstadoP', $estadop)}}"> <i class='bx bxs-message-square-x'></i></a>
        <a href="{{route('UpdateEstadoP', $estadop)}}"><i class='bx bx-rotate-right'></i></a> 
         {{-- <i class='bx bxs-bullseye'></i> --}}
       </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>
@endsection