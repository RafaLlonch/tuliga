@extends('layouts.plantilla')

@section('title','Crear Partido')

@section('content')
   
    <h1 class="text-center mt-10 font-bold text-2xl">Crear partido</h1>

    <div class="container w-full max-w-md mt-4">
        <form class="bg-gray-50 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('partidos.store')}}" method="POST">
          {{-- token --}}
          @csrf
            
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Local
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="equipo1">
                    <option value="">Selecciona el equipo local</option>
                    @foreach ($equipos as $equipo)
                        <option value="{{$equipo['id']}}">{{$equipo->nombre_equipo}}</option>
                    @endforeach
                </select>
            </label>
          </div>
          @error('equipo1')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Visitante
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="equipo2">
                    <option value="">Selecciona el equipo visitante</option>
                    @foreach ($equipos as $equipo)
                        <option value="{{$equipo['id']}}">{{$equipo->nombre_equipo}}</option>
                    @endforeach
                </select>
            </label>
          </div>   
          @error('equipo2')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror       

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
              Dia
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="dia">
            @error('dia')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Hora
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="hora">
            @error('hora')
              <small>*{{$message}}</small>
            @enderror
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
              Resultado
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="resultado" value="No disputado">
          </div>
    
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Guardar partido   
          </button>
          <button class="ml-2 bg-white hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded shadow">
            <a href="{{route('admin')}}">Cancelar </a>  
        </button>
        </form>
      </div>
@endsection