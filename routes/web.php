<?php

use App\Http\Controllers\EquiposController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/info', InfoController::class)->middleware(['auth'])->name('info'); 

//Ruta a home
Route::get('/home', HomeController::class)->middleware(['auth']); 

//Rutas de equipos
Route::get('equipos', [EquiposController::class, 'index'])->name('equipos');

Route::get('equipos/create', [EquiposController::class, 'create'])->name('equipos.create');

Route::post('equipos', [EquiposController::class, 'store'])->name('equipos.store');

Route::get('equipos/{equipo}', [EquiposController::class, 'show'])->name('equipos.show');

Route::get('equipos/{equipo}/edit', [EquiposController::class, 'edit'])->name('equipos.edit');

Route::put('equipos/{equipo}', [EquiposController::class, 'update'])->name('equipos.update');

Route::delete('equipos/{equipo}', [EquiposController::class, 'destroy'])->name('equipos.destory');


//Rutas de partidos
Route::get('partidos', [PartidosController::class, 'index'])->name('partidos');

Route::get('partidos/create', [PartidosController::class, 'create'])->name('partidos.create');

Route::post('partidos', [PartidosController::class, 'store'])->name('partidos.store');

Route::get('partidos/{partido}', [PartidosController::class, 'show'])->name('partidos.show');

Route::get('partidos/{partido}/edit', [PartidosController::class, 'edit'])->name('partidos.edit');

Route::put('partidos/{partido}', [PartidosController::class, 'update'])->name('partidos.update');

Route::delete('partidos/{partido}', [PartidosController::class, 'destroy'])->name('partidos.destory');


//Ruta al dashboard
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth','can:admin'])->name('admin');


//Rutas a usuarios con route resource
Route::resource('usuarios', UserController::class)->only(['index','edit','update'])->names('usuarios')->middleware(['auth','can:admin']);


//Ruta para ver perfil
Route::view('profile', 'profile')->middleware(['auth','can:admin'])->name('profile');


//Ruta para editar perfil
Route::put('profile', [ProfileController::class, 'update'])->middleware(['auth','can:admin'])->name('profile.update');

require __DIR__.'/auth.php';
