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

//skill
Route::resource('/skill', 'App\Http\Controllers\skillController');
Route::get('/skill-delete/{id}', 'App\Http\Controllers\skillController@skill_delete');
Route::get('/all-skill', 'App\Http\Controllers\skillController@showAllSkill') ->name('get_skills');

//settings
Route::get('/setting', 'App\Http\Controllers\settingController@sliderSetting') ->name('setting.index');
Route::post('/setting', 'App\Http\Controllers\settingController@sliderDataStore') ->name('store.slider');

//experiance
Route::get('/experiance', 'App\Http\Controllers\settingController@showExperiancePage') ->name('experiance.show');
Route::post('/experiance', 'App\Http\Controllers\settingController@storeExperiance') ->name('experiance.store');

Route::post('/service', 'App\Http\Controllers\settingController@updateServiceData') ->name('sevice.update');

//review
Route::get('/reviews', 'App\Http\Controllers\reviewAdd@showReviewPage') ->name('review.show');
Route::post('/reviews', 'App\Http\Controllers\reviewAdd@storeReview') ->name('review.store');
Route::get('/reviews-all', 'App\Http\Controllers\reviewAdd@showAllReview') ->name('review.store');


//project
Route::get('/project','App\Http\Controllers\projectController@index') -> name('projects.index');
Route::get('/category/{val}/{id}','App\Http\Controllers\projectController@storecategory') -> name('category.store');
Route::get('/show-cat','App\Http\Controllers\projectController@showCategory');
Route::post('/store-cat','App\Http\Controllers\projectController@storeProject') -> name('project.store') ;
Route::get('/delete-project/{id}','App\Http\Controllers\projectController@deleteProject') -> name('delete.project') ;
Route::get('/project-gallery', function () {
    return view('admin.ProjectGallary');
}) -> name('projectGellary.show');


