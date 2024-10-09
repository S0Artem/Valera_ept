<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Маршрут для отправки формы
Route::get('/product/shop', [ShopController::class, 'shop']);

// Маршрут для отображения продуктов
Route::get('/products', [Controller::class, 'showProducts'])->name('products.create');



    // Отображение страницы входа
    Route::get('/login', function () {
        return view('login');  // Отображаем страницу входа
    })->name('login.form');

    // Страница запроса
    Route::get('/request', function () {
        return view('request');
    });

    // Главная страница (тоже форма входа)
    Route::get('/', function () {
        return view('login');
    });

    // Обработка формы входа
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.process');
    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register.process');



