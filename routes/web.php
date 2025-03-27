<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return redirect('/dashboard');
})->middleware(['auth']);

if (App::environment('testing')) {
    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', fn () => Inertia::render('Dashboard'))->name('dashboard');
    });
} else {
    Route::middleware(['auth', ValidateSessionWithWorkOS::class])->group(function () {
        Route::get('dashboard', fn () => Inertia::render('Dashboard'))->name('dashboard');
    });
}

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
