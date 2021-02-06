<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|Admin Panel Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your Admin Panel Control. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web", "auth:sanctum", "verified" middleware group. Now create something great!
|
*/
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/', function () { return view('admin.dashboard'); })->name('adminPanel');
Route::resource('sliders', 'SliderController');
Route::resource('lessons', 'LessonsController');
Route::resource('departments', 'DepartmentController');
Route::resource('courses', 'CourseController');
Route::resource('news', 'NewsController');
Route::resource('event', 'EventController');
Route::get('/contacts', 'ContactController@index')->name('contacts');
Route::get('/news-letter', 'NewsLetterController@index')->name('NewsLetter');
Route::get('abouts/edit','AboutController@edit' )->name('about.edit');
Route::put('abouts/update','AboutController@update' )->name('about.update');
Route::get('activities/edit','ActivitiesController@edit' )->name('activities.edit');
Route::put('activities/update','ActivitiesController@update' )->name('activities.update');
