<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Landing\Index as LandingIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', LandingIndex::class)->name('home');


Route::prefix('admin')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::middleware('auth')->group(function () {
        Route::get('', Dashboard::class)->name('dashboard');
    });
});
