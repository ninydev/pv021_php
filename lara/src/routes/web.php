<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', function () {
    return view('pages.about',
        [
        'varName' => 'varValue', // Передача данных осуществляется через массив
            'records' => [1,2,3],
            'forCase' => 1
        ]
    );
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/entity', [EntityController::class, 'index'])
    ->name('entity.read.all');

Route::post('/entity', [EntityController::class, 'store'])
    ->name('entity.store');


