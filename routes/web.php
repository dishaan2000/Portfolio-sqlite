<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/study-cases', [HomeController::class, 'studyCases'])->name('study-cases');

// Route to display a specific project
Route::get('/study-cases/{project}', [HomeController::class, 'show'])->name('project.show');

