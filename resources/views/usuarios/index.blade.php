@extends('layouts.plantilla')

@section('title','Usuarios')

@section('content')

  <h1 class="text-center mt-10 font-bold text-2xl">Listado de usuarios</h1> 

  <div class="flex justify-center items-center mt-10">
    <table class="table-auto shadow-md rounded">
      <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
          <th class="py-3 px-6 text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400">
            ID
          </th>
          <th class="py-3 px-6 text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400">
            Nombre
          </th>
          <th class="py-3 px-6 text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400">
            Email
          </th>
          <th class="py-3 px-6 text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400">
            Rol
          </th>
          <th>
          </th>             
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="py-4 px-6 text-sm font-medium text-gray-900  dark:text-white">
              {{$user->id}}
            </td> 
            <td class="py-4 px-6 text-sm font-medium text-gray-900  dark:text-white">
              {{$user->name}}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-500  dark:text-white">
              {{$user->email}}
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-500  dark:text-white">
              @if($user->hasPermissionTo('usuarios.index'))
                Administrador
              @else 
                Usuario
              @endif                     
            </td>
            <td class="py-4 px-6 text-sm font-medium text-gray-500  dark:text-white">
              <button class="bg-blue-500 hover:bg-blue-400 text-white font-semibold py-1 px-2 border-b-1 border-blue-700 hover:border-blue-500 rounded">
                <a href="{{route('usuarios.edit', $user)}}">Editar</a>
              </button>
            </td>
          </tr>  
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="flex justify-center items-center mt-10">
    <button class="ml-2 bg-white hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded shadow">
      <a href="{{route('admin')}}">Volver</a>  
  </button>
  </div>

@endsection