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
    return view("forntend.index");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/skill', 'App\Http\Controllers\skillController');
Route::get('/all-skill', 'App\Http\Controllers\skillController@showAllSkill') ->name('get_skills');
Route::get('/slider', 'App\Http\Controllers\settingController@sliderSetting') ->name('setting.index');
Route::post('/slider', 'App\Http\Controllers\settingController@sliderDataStore') ->name('store.slider');


