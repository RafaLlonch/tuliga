@extends('layouts.plantilla')

@section('title', 'Info')

@section('content')
   
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-50 border-b border-gray-200">
                    <div class="container text-center mt-5">
                        Página web para la gestión de una liga de fútbol. Ha sido creada con el framework de PHP Laravel con
                        la versión 9.1 y con MySQL como base de datos. Cuando un nuevo usuario se registra se le asigna el
                        rol de user, con el que sólo puede ver el listado de equipos, su descripción y el listado de 
                        partidos. Los administradores tienen acceso al dashboard, una página dónde pueden crear y editar 
                        equipos y crear y editar partidos. Y además pueden asignarle el rol de administrador a un usuario.
                    </div> 
                </div>
            </div>
        </div>
    </div>

@endsection