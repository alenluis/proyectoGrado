<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GenerarOrdenesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('cursos',CursosController::class);

    Route::resource('users',UsersController::class);

    Route::get('/genera_ordenes', [GenerarOrdenesController::class,'index'])->name('generar_ordenes.index');

    Route::post('/GenerarOrdenes',[GenerarOrdenesController::class,'generarOrdenes'])->name('GeneraOrdenes');

     Route::post('/eliminarOrden',[GenerarOrdenesController::class,'eliminarOrden'])->name ('eliminarOrden'); 

});
require __DIR__.'/auth.php';