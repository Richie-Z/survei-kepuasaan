<?php

use App\Livewire\Landing\Index as LandingIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', LandingIndex::class)->name('home');
