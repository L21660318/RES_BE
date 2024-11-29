<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Rutas de autenticación
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para la página "alumno"
Route::get('/alumno', function () {
    return view('alumno'); // Archivo: resources/views/alumno.blade.php
})->name('alumno');
