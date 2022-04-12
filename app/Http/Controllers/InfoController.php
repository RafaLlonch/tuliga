<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function __invoke(){

        $usuario = Auth::user();
        return view('info',compact('usuario'));
    }
}
