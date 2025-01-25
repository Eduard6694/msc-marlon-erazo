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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Rutas para usuarios con rol de "Admin"
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard'); // Dashboard de Admin
    Route::get('/admin/citas', [AdminController::class, 'manageAppointments'])->name('admin.appointments'); // Gestión de citas
});
// Rutas para usuarios con rol de "User"
Route::middleware(['auth', 'role:User'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard'); // Dashboard de User
    Route::get('/user/citas', [UserController::class, 'createAppointment'])->name('user.create.appointment'); // Agendar una cita
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
