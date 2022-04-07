<?php

use App\Http\Controllers\About_us_Controller;
use App\Http\Controllers\Education_controller;
use App\Http\Controllers\Experience_Controller;
use App\Http\Controllers\Skills_Techonligy_Controller;
use App\Http\Controllers\Work_experience_controller;
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
    return view('welcome');
});

// Route::get('/', function () {
//     return view('admin.about'); });
// // })->middleware(['auth'])->name('index');

Route::get('index', function () {
    return view('index'); });

    // admindashboard routes

Route::get('/about_us', [About_us_Controller::class,'index']);
Route::post('add_about',[About_us_Controller::class,'add_about_us']);
Route::get('/experience',[Experience_Controller::class,'index']);
Route::post('add_experience',[Experience_Controller::class,'add_experience']);
Route::get('/skills',[Skills_Techonligy_Controller::class,'index']);
Route::post('/add_skills',[Skills_Techonligy_Controller::class,'add_skills']);
Route::get('/education',[Education_controller::class,'index']);
Route::post('add_degree',[Education_controller::class,'add_degree']);
Route::get('/work',[Work_experience_controller::class,'index']);
Route::post('/add_work',[Work_experience_controller::class,'add_work']);


require __DIR__.'/auth.php';
