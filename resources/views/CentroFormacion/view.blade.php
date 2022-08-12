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
        <th scope="col">nombre del centro </th>
       <th scope="col">regional</th>
     </tr>
   </thead>


   <tbody>
      @foreach ($objetoretornado as $centrof)
          
      
     <tr>

        <td>{{$centrof->nombre}}</td>
        <td>{{$centrof->regional_id}}</td>
       
        <td>
            <a href="{{Route('DeleteCentrof', $centrof)}}"> <i class='bx bxs-message-square-x'></i></a>
            <a href=""><i class='bx bx-rotate-right'></i></a> 
             {{-- <i class='bx bxs-bullseye'></i> --}}
           </td>
     </tr>
     
     @endforeach
   </tbody>
 </table>
@endsection