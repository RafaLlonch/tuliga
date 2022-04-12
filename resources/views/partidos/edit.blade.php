@extends('layouts.plantilla')

@section('title','Editar partido')

@section('content')

    <h1 class="text-center mt-10 font-bold text-2xl">Editar partido</h1>
    <h1 class="text-center text-gray-700 mt-5 pt-5 font-bold text-xl">{{$partido->equipo1->nombre_equipo}}  / {{$partido->equipo2->nombre_equipo}}</h1>

    <div class="container w-full max-w-xs mt-5">
        
      <form class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('partidos.update', $partido)}}" method="POST">
          {{-- token --}}
          @csrf
    
          {{-- modifica el método post a put --}}
          @method('put')
    
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
              Dia
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="dia" value="{{old('dia', $partido->dia)}}">
            @error('dia')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
              Hora
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="hora" value="{{old('hora', $partido->hora)}}">
            @error('hora')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
              Resultado
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="resultado" value="{{old('resultado', $partido->resultado)}}">
            @error('resultado')
              <small>*{{$message}}</small>
            @enderror
          </div>
    
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="submit">
          Actualizar partido   
          </button>
          <button class="ml-2 bg-white hover:bg-gray-300 text-gray-800 font-semibold py-1 px-2 rounded shadow">
            <a href="{{route('partidos')}}">Cancelar </a>  
        </button>
        </form>
      </div>

@endsection