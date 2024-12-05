<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController; // Controlador para el dashboard
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UsuarioController;

// Rutas de autenticación
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para la página "alumno"
Route::get('/alumno', function () {
    return view('alumno'); // Archivo: resources/views/alumno.blade.php
})->name('alumno');

//Rutas crear cuenta

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


// Rutas de autenticación
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Ruta de logout, protegida por autenticación
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Ruta principal del dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Nuevas páginas dentro del dashboard
    Route::get('/dashboard/pagina1', [DashboardController::class, 'pagina1'])->name('dashboard.pagina1');
    Route::get('/dashboard/pagina2', [DashboardController::class, 'pagina2'])->name('dashboard.pagina2');
});
