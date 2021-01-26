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
Route::get('/skill-delete/{id}', 'App\Http\Controllers\skillController@skill_delete');
Route::get('/all-skill', 'App\Http\Controllers\skillController@showAllSkill') ->name('get_skills');
Route::get('/setting', 'App\Http\Controllers\settingController@sliderSetting') ->name('setting.index');
Route::post('/setting', 'App\Http\Controllers\settingController@sliderDataStore') ->name('store.slider');
Route::get('/experiance', 'App\Http\Controllers\settingController@showExperiancePage') ->name('experiance.show');
Route::post('/experiance', 'App\Http\Controllers\settingController@storeExperiance') ->name('experiance.store');
Route::get('/reviews', 'App\Http\Controllers\settingController@showReviewPage') ->name('review.show');
Route::post('/service', 'App\Http\Controllers\settingController@updateServiceData') ->name('sevice.update');


