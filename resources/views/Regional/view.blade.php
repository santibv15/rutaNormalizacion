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
        <th scope="col">Regional </th>
       <th scope="col">opciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $regional)
          
      
     <tr>

        <td>{{$regional->nombre_region}}</td>
       
       <td>
        <a href="{{Route('DeleteRegional', $regional)}}"> <i class='bx bxs-message-square-x'></i></a>
        <a href="{{Route('UpdateRegional', $regional)}}"><i class='bx bx-rotate-right'></i></a> 
         {{-- <i class='bx bxs-bullseye'></i> --}}
         <h1>holaaa</h1>
       </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>
@endsection