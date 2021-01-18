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

//menu-items
Route::get('/about', function () {
    return view('layouts.menu-items.about');})->name('about');
Route::get('/contact', function () {
    return view('layouts.menu-items.contact');})->name('contact');
Route::get('/copyrights', function () {
    return view('layouts.menu-items.copyrights');})->name('copyrights');
Route::get('/policy', function () {
    return view('layouts.menu-items.policy');})->name('policy');
Route::get('/map', function () {
    return view('layouts.menu-items.map');})->name('map');

// City Scenes
Route::get('/city-entrance', function () {
    return view('layouts.scenes.city.city-entrance');})->name('city-entrance');
Route::get('/city-rich', function () {
    return view('layouts.scenes.city.city-rich');})->name('city-rich');
Route::get('/city-slum', function () {
    return view('layouts.scenes.city.city-slum');})->name('city-slum');
Route::get('/city-school', function () {
    return view('layouts.scenes.city.city-school');})->name('city-school');

// Village Scenes
Route::get('/village-entrance', function () {
    return view('layouts.scenes.village.village-entrance');})->name('village-entrance');
Route::get('/village-school', function () {
    return view('layouts.scenes.village.village-school');})->name('village-school');
Route::get('/village-farm', function () {
    return view('layouts.scenes.village.village-farm');})->name('village-farm');
Route::get('/village-waterwell', function () {
    return view('layouts.scenes.village.village-waterwell');})->name('village-waterwell');

// Other Scenes
Route::get('/main-road', function () {
    return view('layouts.scenes.main-road');
})->name('main-road');

Route::get('/intro', [\App\Http\Controllers\IntroController::class, 'index'])->name('intro');
Route::get('/transition', [\App\Http\Controllers\IntroController::class, 'indexTransition'])->name('intro.transition');
