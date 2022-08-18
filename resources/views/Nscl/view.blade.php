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
        <th scope="col">titulo </th>
       <th scope="col">codigo</th>
       <th scope="col">version</th>
       <th scope="col">fecha de publicacion</th>
       <th scope="col">fecha de revision</th>
       <th scope="col">fecha de aprobacion</th>
       <th scope="col">n- aprobacion</th>
       <th scope="col">mesa </th>
       <th scope="col">estado producto</th>
       <th scope="col">centro formacion</th>
       <th scope="col">categoria</th>
       <th scope="col">opciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $nscl)
          
      
     <tr>

        <td>{{$nscl->titulo}}</td>
        <td>{{$nscl->codigo_nscl}}</td>
        <td>{{$nscl->version}}</td>
        <td>{{$nscl->fecha_publicacion}}</td>
        <td>{{$nscl->fecha_revision}}</td>
        <td>{{$nscl->fecha_aprobacion}}</td>
        <td>{{$nscl->n_aprobacion}}</td>
        <td>{{$nscl->nombre_sector}}</td>
        <td>{{$nscl->tipo_estado}}</td>
        <td>{{$nscl->nombre}}</td>
        <td>{{$nscl->tipo_categoria}}</td>
       
        <td>
            <a href="{{route('DeleteNscl', $nscl->id)}}"> <i class='bx bxs-message-square-x'></i></a>
            <a href="{{route('UpdateNscl', $nscl->id)}}"><i class='bx bx-rotate-right'></i></a> 
             {{-- <i class='bx bxs-bullseye'></i> --}}
           </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>
@endsection