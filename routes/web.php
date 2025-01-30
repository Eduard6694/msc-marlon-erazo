<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

// Redirigir al dashboard correspondiente según el rol del usuario
Route::get('/dashboard', function () {
    if (auth()->user()->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif (auth()->user()->hasRole('user')) {
        return redirect()->route('user.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Rutas de usuario después de la verificación
    Route::middleware(['role:user'])->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
        Route::get('/user/citas', [UserController::class, 'listAppointments'])->name('user.list.appointments');
        Route::post('/user/citas/guardar', [UserController::class, 'store'])->name('user.create.appointment');
        Route::get('/user/patient/form', [UserController::class, 'showPatientForm'])->name('user.patient.form');
        Route::post('/user/patient/save', [UserController::class, 'savePatient'])->name('user.save.patient');
    });

    // Rutas de admin después de la verificación
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/citas/listar', [AdminController::class, 'listAppointments'])->name('admin.list.appointments');
        Route::post('/admin/citas/autorizar/{id}', [AdminController::class, 'authorizeAppointment'])->name('admin.authorize.appointment');
    });
});



// Rutas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
