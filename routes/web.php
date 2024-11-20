<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Middleware\HighlightKeywords;
use Illuminate\Support\Facades\Route;

Route::middleware([HighlightKeywords::class])->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/history', [ExperienceController::class, 'showExperience']);
});

Route::get('/skills', function () {
    return view('skills');
})->withoutMiddleware([HighlightKeywords::class]);
