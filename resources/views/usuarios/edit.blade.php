@extends('layouts.plantilla')

@section('title','Editar partido')

@section('content')

  <h1 class="text-center mt-10 font-bold text-2xl">Asignar un rol</h1>

  <div class="container w-full max-w-xs mt-5">
    <div class="bg-gray-50 shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <h1 class="text-center font-bold mb-4">{{$usuario->name}}</h1>
      {!! Form::model($usuario, ['route' =>['usuarios.update', $usuario], 'method' => 'put']) !!}
        @foreach ($roles as $role)
          <div>
            <label>
              {!! Form::checkbox('roles[role]', $role->id, null,['class' => 'mr-1']) !!}
              {{$role->name}}
            </label>
          </div>
        @endforeach
          {!! Form::submit('Asignar rol', ['class' => 'mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline']) !!}
          <button class="ml-2 bg-white hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded shadow">
            <a href="{{route('usuarios.index')}}">Volver</a>  
        </button>
        {!! Form::close() !!} 
    </div>
  </div> 
  
  @if (session('info'))
  <div class="alert alert-succes text-center">
    <strong>{{session('info')}}</strong>
  </div>    
  @endif
        
@endsection