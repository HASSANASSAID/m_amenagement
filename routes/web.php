<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact-save', [ContactController::class, 'store'])->name('contact.save');


    Auth::routes();

    Route::get('/dashboard', [DashboardController::class, 'index'])->Middleware('auth')->name('dashboard');
    Route::get('/services', [ServicesController::class, 'index'])->Middleware('auth')->name('services.index');
    Route::get('/ajouter-service', [ServicesController::class, 'create'])->Middleware('auth')->name('services.create');
    Route::post('/service-save', [ServicesController::class, 'store'])->Middleware('auth')->name('service.save');