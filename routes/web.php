<?php

use App\Http\Controllers\About_us_Controller;
use App\Http\Controllers\Artical_Controller;
use App\Http\Controllers\Education_controller;
use App\Http\Controllers\Experience_Controller;
use App\Http\Controllers\Index_Controller;
use App\Http\Controllers\Recent_work_Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('admin.about'); });
// // })->middleware(['auth'])->name('index');

Route::get('index', function () {
    return view('index'); });

    // admindashboard routes

Route::get('/about_us', [About_us_Controller::class,'index']);
Route::post('add_about',[About_us_Controller::class,'add_about_us']);
Route::get('/about_delete/{id}',[About_us_Controller::class,'about_delete']);
Route::get('/experience',[Experience_Controller::class,'index']);
Route::post('add_experience',[Experience_Controller::class,'add_experience']);
Route::get('/experience_delete/{id}',[Experience_Controller::class,'experience_delete']);
Route::get('/skills',[Skills_Techonligy_Controller::class,'index']);
Route::post('/add_skills',[Skills_Techonligy_Controller::class,'add_skills']);
Route::get('/skills_delete/{id}',[Skills_Techonligy_Controller::class,'skills_delete']);
Route::get('/education',[Education_controller::class,'index']);
Route::post('add_degree',[Education_controller::class,'add_degree']);
Route::get('/edu_delete/{id}',[Education_controller::class,'edu_delete']);
Route::get('/work',[Work_experience_controller::class,'index']);
Route::post('/add_work',[Work_experience_controller::class,'add_work']);
Route::get('/work_delete/{id}',[Work_experience_controller::class,'work_delete']);
Route::get('project',[Recent_work_Controller::class,'index']);
Route::post('add_project',[Recent_work_Controller::class,'add_project']);
Route::get('/project_delete/{id}',[Recent_work_Controller::class,'project_delete']);
Route::get('/artical',[Artical_Controller::class,'index']);
Route::post('add_artical',[Artical_Controller::class,'add_artical']);
Route::get('/artical_delete/{id}',[Artical_Controller::class,'artical_delete']);


// Frontend Route


Route::get('/',[Index_Controller::class,'index']);


require __DIR__.'/auth.php';
