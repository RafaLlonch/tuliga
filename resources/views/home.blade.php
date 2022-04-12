@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-50 border-b border-gray-200">
                    <div class="flex items-end">
                        <div class="flex font-bold">
                            Bienvenido/a
                        </div>
                        <div class="flex ml-4">
                        {{$usuario->name}}
                        </div>
                    </div>
                    <div class="mt-8 text-blue-500">
                        @if($usuario->hasPermissionTo('admin'))
                            Administrador
                        @endif  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
