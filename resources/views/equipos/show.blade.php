@extends('layouts.plantilla')

@section('title','Equipo '.$equipo->nombre_equipo)

@section('content')      
    
    <h1 class="text-center text-xl mt-10 pt-5 mb-8 font-bold">{{$equipo->nombre_equipo}}</h1>

    <div class="container flex flex-col max-w-md">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-md sm:rounded-lg">
              <table class="min-w-full">                                 
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="bg-gray-50 dark:bg-gray-700">
                        Entrenador
                    </th>
                    <td scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                        {{$equipo->entrenador}}
                    </td>
                </tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="bg-gray-50 dark:bg-gray-700">
                        Presidente
                    </th>
                    <td scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                        {{$equipo->presidente}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="bg-gray-50 dark:bg-gray-700">
                        Año de fundación
                    </th>
                    <td scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                        {{$equipo->anio_fundacion}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="bg-gray-50 dark:bg-gray-700">
                        Localidad
                    </th>
                    <td scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                        {{$equipo->localidad}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="bg-gray-50 dark:bg-gray-700">
                        Provincia
                    </th>
                    <td scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                        {{$equipo->provincia}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="bg-gray-50 dark:bg-gray-700">
                        Campo
                    </th>
                    <td scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                        {{$equipo->campo}}
                    </td>
                </tr>                
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center mt-6">
        @can('equipos.edit')
        <button class="mx-8 my-8 bg-blue-500 hover:bg-blue-400 text-white font-semibold py-1 px-2 border-b-1 border-blue-700 hover:border-blue-500 rounded" type="submit">
            <a href="{{route('equipos.edit', $equipo)}}">Editar</a>
        </button>
        @endcan

        <button class="ml-2 bg-white hover:bg-gray-300 text-gray-800 font-semibold py-1 px-2 border-b-slate-400 rounded shadow">
            <a href="{{route('equipos')}}">Volver </a>  
        </button>

        @can('equipos.destroy')
        <form action="{{route('equipos.destory', $equipo)}}" method="POST">
            @csrf
            @method('delete')
            <button class="mx-8 my-8 bg-red-500 hover:bg-red-400 text-white font-semibold py-1 px-2 border-b-1 border-red-700 hover:border-red-500 rounded" type="submit">Eliminar</button>
        </form>
        @endcan
    </div>

@endsection

