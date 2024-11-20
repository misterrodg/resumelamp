<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillController;
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

Route::get('/skills', [SkillController::class, 'showSkills']);

Route::get('/pdf', [ResumeController::class, 'buildResume']);
