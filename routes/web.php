<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Landing\Index as LandingIndex;
use App\Livewire\Admin\Question\Index as QuestionIndex;
use App\Livewire\Admin\Question\Form as QuestionForm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', LandingIndex::class)->name('home');


Route::prefix('admin')->group(function () {
    Route::get('login', Login::class)->name('login')->middleware('guest');
    Route::middleware('auth')->group(function () {
        Route::get('', Dashboard::class)->name('dashboard');

        Route::get('logout', function () {
            auth()->logout();
            return redirect(route('login'));
        })->name('logout');

        Route::prefix('question')->name('question.')->group(function () {
            Route::get('', QuestionIndex::class)->name('index');
            Route::get('form/{questionId?}', QuestionForm::class)->name('form');
        });
    });
});
