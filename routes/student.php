<?php

use App\Http\Controllers\Student\TimetableController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('student')
    ->name('student.')
    ->group(function () {
        Route::get('timetable', [TimetableController::class, 'index'])
            ->name('timetable');
    });
