<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('root');
});


Route::get('/about-me', [AboutMeController::class,'aboutMeFunc']);

Route::get('/skills', [SkillsController::class,'skillsFunc']);

Route::get('/hobbies', [HobbiesController::class,'hobbiesFunc']);
