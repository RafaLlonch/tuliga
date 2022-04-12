@extends('layouts.plantilla')

@section('title', 'Administrador')

@section('content')

    <h1 class="container text-center mt-10 font-bold text-2xl">Bienvenido a la página de administrador</h1> 

    <div class="container flex justify-center mt-10">

        <div class="flex items-center space-x-2 p-6">
            <div class="bg-gray-50 p-6 border rounded-md">
                <div class="text-center font-bold mb-4">
                    <p>Usuarios</p>
                </div>
                <div class="hover:text-blue-500 mb-2">
                    <a href="{{route('usuarios.index')}}">Listado de usuarios</a>
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-2 p-6">
            <div class="bg-gray-50 p-6 border rounded-md">
                <div class="text-center font-bold mb-4">
                    <p>Equipos</p>
                </div>
                <div class="hover:text-blue-500 mb-2">
                    <a href="{{route('equipos')}}">Listado de equipos</a>  
                </div>
                <div class="hover:text-blue-500 mb-2">
                    <a href="{{route('equipos.create')}}">Crear equipo</a>  
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-2 p-6">
            <div class="bg-gray-50 p-6 border rounded-md">
                <div class="text-center font-bold mb-4">
                    <p>Partidos</p>
                </div>
                <div class="hover:text-blue-500 mb-2">
                    <a href="{{route('partidos')}}">Listado de partidos</a>  
                </div>
                <div class="hover:text-blue-500 mb-2">
                    <a href="{{route('partidos.create')}}">Crear partido</a>  
                </div>
            </div>
        </div>

    </div>
   
@endsection




