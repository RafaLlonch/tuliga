<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Requests\StoreEquipo;

class EquiposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }
    
    public function index(){

        $equipos = Equipo::all();

        return view('equipos.index', compact('equipos'));
    }

    public function create(){
        return view('equipos.create');
    }

    public function store(StoreEquipo $request){

        //primero valida el Form Request StoreEquipo
        
        $equipo = new Equipo();

        $equipo->nombre_equipo = $request->nombre_equipo;
        $equipo->entrenador = $request->entrenador;
        $equipo->presidente = $request->presidente;
        $equipo->anio_fundacion = $request->anio_fundacion;
        $equipo->localidad = $request->localidad;
        $equipo->provincia = $request->provincia;
        $equipo->campo = $request->campo;

        $equipo->save();

        return redirect()->route('equipos.show', $equipo);
    }

    public function show(Equipo $equipo){
        
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo){

        return view('equipos.edit', compact('equipo'));
    }

    public function update(StoreEquipo $request, Equipo $equipo){

        //primero valida el Form Request StoreEquipo

        $equipo->nombre_equipo = $request->nombre_equipo;
        $equipo->entrenador = $request->entrenador;
        $equipo->presidente = $request->presidente;
        $equipo->anio_fundacion = $request->anio_fundacion;
        $equipo->localidad = $request->localidad;
        $equipo->provincia = $request->provincia;
        $equipo->campo = $request->campo;

        $equipo->save();

        return redirect()->route('equipos.show', $equipo);
    }

    public function destroy(Equipo $equipo){

        $equipo->delete();
        
        return redirect()->route('equipos');
    }
}
