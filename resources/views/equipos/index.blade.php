@extends('layouts.plantilla')

@section('title','Equipos')

@section('content')
    
  <h1 class="container text-center mt-10 font-bold text-2xl">Equipos</h1>    

    <div class="container">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 mt-8 ">
          @foreach ($equipos as $equipo)
            <div class="bg-gray-50 p-6 border rounded-md hover:text-blue-500">
              <a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->nombre_equipo}}</a> 
            </div>     
          @endforeach
      </div>   
    </div>

@endsection
