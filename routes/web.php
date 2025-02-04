<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
})->name('index');

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
    // Rutas de usuario
    Route::middleware(['role:user'])->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
        Route::get('/user/citas/listar', [UserController::class, 'listAppointments'])->name('user.list.appointments'); // Ruta corregida
        Route::post('/user/citas/guardar', [UserController::class, 'store'])->name('user.create.appointment');
        Route::get('/user/patient/form', [UserController::class, 'showPatientForm'])->name('user.patient.form');
        Route::post('/user/patient/save', [UserController::class, 'saveOrUpdatePatient'])->name('user.save.patient');
        Route::post('/user/evaluation/save', [UserController::class, 'saveEvaluation'])->name('user.save.evaluation');

    });

    // Rutas de administrador
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/citas/listar', [AdminController::class, 'listAppointments'])->name('admin.listAppointments');
        Route::patch('/admin/citas/autorizar/{id}', [AdminController::class, 'authorizeAppointment'])->name('admin.authorize.appointment');
        Route::get('/admin/pacientes', [AdminController::class, 'listPatients'])->name('admin.list.patients');
        Route::get('/admin/evaluations', [AdminController::class, 'listEvaluations'])->name('admin.evaluations');
        Route::post('/admin/evaluate-test', [AdminController::class, 'evaluateTest'])->name('admin.evaluateTest');



    });
});

// Rutas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
