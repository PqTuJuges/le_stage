<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::inertia('mentions-legales', 'public/Legal')->name('legal');
Route::inertia('a-propos', 'public/About')->name('about');

/*Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Admin routes (/stages, /stages/creer, stages/{id}, /stagiaires/creer, tableau-de-bord, )
});

Route::middleware('guest')->group(function () {
    // Guest routes (/connexion, /inscription, /mot-de-passe-oublie)
});
*/

require __DIR__.'/settings.php';
