@extends('layouts.plantilla')

@section('title','Partido '.$partido->id)

@section('content')

    <h1>{{$partido->equipo1->nombre_equipo}} Vs {{$partido->equipo2->nombre_equipo}}</h1>  
    <h2>Dia: {{$partido->dia}}</h2> 
    <h2>Hora: {{$partido->hora}}</h2>
    <h2>Campo: {{$partido->equipo1->campo}}</h2>
    <h2>Resultado: {{$partido->resultado}}</h2>

    <div class="flex justify-center items-center">
        <button class="mx-8 my-8 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit">
            <a href="{{route('partidos.edit', $partido)}}">Editar</a>
        </button>

        <form action="{{route('partidos.destory', $partido)}}" method="POST">
            @csrf
            @method('delete')
            <button class="mx-8 my-8 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded" type="submit">Eliminar</button>
        </form>
    </div>
@endsection