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
        <th scope="col">Nombre del centro </th>
       <th scope="col">Regional</th>
       <th scope="col">Opciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $centrof)
          
      
     <tr>

        <td>{{$centrof->nombre}}</td>
        <td>{{$centrof->nombre_region}}</td>
       
        <td>
            <a href="{{Route('DeleteCentrof', $centrof->id)}}"> <i class='bx bxs-message-square-x'></i></a>
            <a href="{{Route('UpdateCentrof', $centrof->id)}}"><i class='bx bx-rotate-right'></i></a> 
             {{-- <i class='bx bxs-bullseye'></i> --}}
           </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>
@endsection