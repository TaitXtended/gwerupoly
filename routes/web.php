<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mission', [PagesController::class,'mission']);
Route::get('/history', [PagesController::class,'history']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/contact', [PagesController::class,'contact']);


Route::resource('/notices','App\Http\Controllers\NoticesContoller');

Route::resource('/students','App\Http\Controllers\StudentsController');
Route::get('/students/{id}',[StudentsController::class,'show']);
Route::get('/students/{id}/edit',[StudentsController::class,'edit']);
Route::get('/students/{id}/delete',[StudentsController::class,'destroy']);

Route::resource('/departments','App\Http\Controllers\DepartmentsController');
Route::get('/departments/{id}/delete',[DepartmentsController::class,'destroy']);

Route::resource('/courses','App\Http\Controllers\CoursesController');
Route::get('/courses/{id}/delete',[CoursesController::class,'destroy']);

Route::resource('/levels','App\Http\Controllers\LevelsController');

Route::resource('/portal','App\Http\Controllers\PortalsController');

Route::get('/role',[TestController::class,'index']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
