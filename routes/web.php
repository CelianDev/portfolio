<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MailController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/', function () {
//     return Inertia::render('Portfolio');
// });

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/CV', [PortfolioController::class, 'cv'])->name('portfolio.cv');
Route::get('/Compétences-BTS-SIO', [PortfolioController::class, 'competences'])->name('portfolio.competences');
Route::get('/Cybersécurité', [PortfolioController::class, 'cybersecurite'])->name('portfolio.cybersecurite');
Route::get('/Contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
Route::get('/Réalisation-Pro-Entreprise', [PortfolioController::class, 'proEntreprise'])->name('portfolio.proEntreprise');
Route::get('/Réalisation-Pro-Centre', [PortfolioController::class, 'proCentre'])->name('portfolio.proCentre');
Route::post('/Contact', [MailController::class, 'send'])->name('mail.send');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
