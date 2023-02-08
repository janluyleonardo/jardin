<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DirectoriesController;
// use PDF;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/students', StudentsController::class);
    Route::get('/imprimir/{id}', [StudentsController::class, 'imprimir'])->name('imprimir');
    Route::resource('/directories', DirectoriesController::class);
    Route::get('/export', [DirectoriesController::class, 'export'])->name('export');
    // Route::get('/imprimir', function () {
    //   $pdf = PDF::loadView('students.show');
    //   return $pdf->download('students.pdf');
    // })->name('imprimir');
});

Route::get('/prueba', function () {
  return view('prueba');
});
