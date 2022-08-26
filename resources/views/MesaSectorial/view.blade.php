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
        <th scope="col">sector: </th>
       <th scope="col">codigo mesa: </th>
       <th scope="col">opciones</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $mesa)
          
      
     <tr>
        <td>{{$mesa->nombre_sector}}</td>
       <td>{{$mesa->codigo}}</td>
       
       <td>
        <a href="{{Route('DeleteMesa', $mesa)}}"> <i class='bx bxs-message-square-x'></i></a>
        <a href="{{route('UpdateMesa', $mesa)}}"><i class='bx bx-rotate-right'></i></a> 
         {{-- <i class='bx bxs-bullseye'></i> --}}
       </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>

 @include('layouts.Footer')
@endsection