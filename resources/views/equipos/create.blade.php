@extends('layouts.plantilla')

@section('title','Crear Equipo')

@section('content') 

    <h1 class="text-center mt-6 font-bold text-2xl">Crear equipo</h1>

    <div class="container w-full max-w-md mt-4 pb-8">
        <form class="bg-gray-50 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('equipos.store')}}" method="POST">
          {{-- token --}}
          @csrf
            
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Nombre del equipo
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nombre_equipo">
            @error('nombre_equipo')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Entrenador
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="entrenador">
            @error('entrenador')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Presidente
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="presidente">
            @error('presidente')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Año de fundación
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="anio_fundacion">
            @error('anio_fundacion')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Localidad
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="localidad">
            @error('localidad')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Provincia
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="provincia">
            @error('provincia')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Campo
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="campo">
            @error('campo')
              <small>*{{$message}}</small>
            @enderror
          </div>
    
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Guardar equipo   
          </button>
           <button class="ml-2 bg-white hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded shadow">
              <a href="{{route('admin')}}">Cancelar </a>  
          </button>
        </form>
    </div>
@endsection