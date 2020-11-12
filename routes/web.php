<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.index');
});

/*Route::get('/', [IndexController::class, 'index'])->name('index.index');*/

Route::get('/city_entrance', function () {
    return view('layouts.scenes.city_entrance');
});

Route::get('/scene', function () {
    return view('layouts.scenes.index');
});

Route::get('/scene-1', function () {
    return view('layouts.scenes.scene-1');
});

Route::get('/intro', [\App\Http\Controllers\IntroController::class, 'index'])->name('intro');
Route::get('/transition', [\App\Http\Controllers\IntroController::class, 'indexTransition'])->name('intro.transition');
