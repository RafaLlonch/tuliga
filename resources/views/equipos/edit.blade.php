@extends('layouts.plantilla')

@section('title','Editar equipo')

@section('content')
 
<h1 class="text-center mt-10 mb-4 font-bold text-2xl">Editar equipo</h1>
  <div class="container w-full max-w-md">
    <form class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('equipos.update', $equipo)}}" method="POST">
      {{-- token --}}
      @csrf

      {{-- modifica el método post a put --}}
      @method('put')

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Nombre del equipo
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nombre_equipo" value="{{old('nombre_equipo', $equipo->nombre_equipo)}}" >
        {{-- método que evalua que el campo esta lleno --}}
        @error('nombre_equipo')
        <small>*{{$message}}</small>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Entrenador
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="entrenador" value="{{old('entrenador', $equipo->entrenador)}}">
        @error('entrenador')
          <small>*{{$message}}</small>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Presidente
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="presidente" value="{{old('presidente', $equipo->presidente)}}">
        @error('presidente')
        <small>*{{$message}}</small>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Año de fundación
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="anio_fundacion" value="{{old('anio_fundacion', $equipo->anio_fundacion)}}">
        @error('anio_fundacion')     
        <small>*{{$message}}</small>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Localidad
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="localidad" value="{{old('localidad', $equipo->localidad)}}">
        @error('localidad')
        <small>*{{$message}}</small>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Provincia
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="provincia" name="provincia" value="{{old('provincia', $equipo->provincia)}}">
        @error('provincia')
        <small>*{{$message}}</small>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Campo
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="campo" value="{{old('campo', $equipo->campo)}}">
        @error('campo')
        <small>*{{$message}}</small>
        @enderror
      </div>

      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
      Actualizar equipo    
      </button>
      <button class="ml-2 bg-white hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded shadow">
        <a href="{{route('equipos.show', $equipo)}}">Cancelar </a>  
    </button>
    </form>
  </div>

@endsection