@extends('layouts.plantilla')

@section('title','Partidos')

@section('content')

<h1 class="container text-center mt-10 font-bold text-2xl">Partidos</h1>  

  <div class="container flex flex-col mt-4">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-md sm:rounded-lg">
          <table class="min-w-full">
            <thead class="bg-gray-50 dark:bg-gray-700">
              <tr>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Local
                </th>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Visitante
                </th>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Dia
                </th>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Hora
                </th>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Campo
                </th>
                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                  Resultado
                  </th>
                @can('partidos.edit')
                <th scope="col" class="relative py-3 px-6">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="relative py-3 px-6">
                  <span class="sr-only">Edit</span>
                </th>
                @endcan
            </thead>
            <tbody>
            @foreach ($partidos as $partido)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$partido->equipo1->nombre_equipo}}
                </td> 
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$partido->equipo2->nombre_equipo}}
                </td>
                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                  {{$partido->dia}}
                </td>
                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                  {{$partido->hora}}
                </td>
                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                  {{$partido->equipo1->campo}}
                </td> 
                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                  {{$partido->resultado}}
                </td> 
                @can('partidos.edit')
                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap"> 
                  <a href="{{route('partidos.edit', $partido)}}" class="text-blue-600 dark:text-blue-500 hover:underline">Modificar</a> 
                </td>
                @endcan
                @can('partidos.destroy')
                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                  <form action="{{route('partidos.destory', $partido)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="text-blue-600 dark:text-blue-500 hover:underline">Eliminar</button>
                  </form>
                </td>
                @endcan   
              </tr>  
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
