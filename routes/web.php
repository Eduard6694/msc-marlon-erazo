<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


// Redirigir al dashboard correspondiente según el rol del usuario
Route::get('/dashboard', function () {
    if (auth()->user()->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif (auth()->user()->hasRole('user')) {
        return redirect()->route('user.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas específicas para Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/citas', [AdminController::class, 'manageAppointments'])->name('admin.appointments');
});

// Rutas específicas para User
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/citas', [UserController::class, 'index'])->name('user.dashboard');
    Route::post('/user/citas/guardar', [UserController::class, 'store'])->name('user.create.appointment');
    Route::get('/user/citas/listar', [UserController::class, 'listAppointments'])->name('user.list.appointments');
});

// Rutas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
