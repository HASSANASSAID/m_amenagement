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
    Route::get('/service-edit/{service}', [ServicesController::class, 'edit'])->Middleware('auth')->name('service.edit');
    Route::post('/service-update', [ServicesController::class, 'update'])->Middleware('auth')->name('service.update');
    Route::post('/service-delete/{service}', [ServicesController::class, 'delete'])->Middleware('auth')->name('service.delete'); 

    Route::get('/users', [\App\Http\Controllers\backend\UserController::class, 'index'])->Middleware('auth')->name('users.index');
    Route::get('/ajouter-user', [\App\Http\Controllers\backend\UserController::class, 'create'])->Middleware('auth')->name('users.create');   
    Route::post('/user-save', [\App\Http\Controllers\backend\UserController::class, 'store'])->Middleware('auth')->name('user.save');
    Route::post('/user-update', [\App\Http\Controllers\backend\UserController::class, 'update'])->Middleware('auth')->name('user.update');


    Route::get('/profile', [\App\Http\Controllers\backend\UserController::class, 'profile'])->Middleware('auth')->name('user.profile');
