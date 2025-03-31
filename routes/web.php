<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;




Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/resume-tamplate', [indexController::class, 'resume_tamplate'])->name('resume_tamplate');
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'submitLogin'])->name('submitLogin');
Route::post('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/show-tamplate/{id}', [indexController::class, 'show_tamplate'])->name('show_tamplate');
Route::get('/show-form', [CVController::class, 'show_form'])->name('show_form');
Route::post('/cv/store', [CVController::class, 'store'])->middleware('auth')->name('cv.store');
Route::get('/my-cvs', [CVController::class, 'my_cvs'])->middleware('auth')->name('my_cvs');
Route::get('/cv/{id}', [CVController::class, 'show'])->middleware('auth')->name('cv.show');
Route::get('/cv/{id}/{template_id}/download', [CVController::class, 'downloadCVAsPDF'])->name('cv.download');
