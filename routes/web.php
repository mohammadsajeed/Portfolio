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
Route::get('/about_us', [About_us_Controller::class,'index'])->middleware(['auth'])->name('about');
Route::post('add_about',[About_us_Controller::class,'add_about_us'])->middleware(['auth'])->name('insert_about');
Route::get('/about_delete/{id}',[About_us_Controller::class,'about_delete'])->middleware(['auth'])->name('Delete_about');
Route::get('/experience',[Experience_Controller::class,'index'])->middleware(['auth'])->name('experience');
Route::post('add_experience',[Experience_Controller::class,'add_experience'])->middleware(['auth'])->name('insert_experiecne');
Route::get('/experience_delete/{id}',[Experience_Controller::class,'experience_delete'])->middleware(['auth'])->name('Delete_experience');
Route::get('/skills',[Skills_Techonligy_Controller::class,'index'])->middleware(['auth'])->name('skills');
Route::post('/add_skills',[Skills_Techonligy_Controller::class,'add_skills'])->middleware(['auth'])->name('insert_sills');
Route::get('/skills_delete/{id}',[Skills_Techonligy_Controller::class,'skills_delete'])->middleware(['auth'])->name('Delete_siklls');
Route::get('/education',[Education_controller::class,'index'])->middleware(['auth'])->name('education');
Route::post('add_degree',[Education_controller::class,'add_degree'])->middleware(['auth'])->name('insert_degree');
Route::get('/edu_delete/{id}',[Education_controller::class,'edu_delete'])->middleware(['auth'])->name('Delete_degree');
Route::get('/work',[Work_experience_controller::class,'index'])->middleware(['auth'])->name('work');
Route::post('/add_work',[Work_experience_controller::class,'add_work'])->middleware(['auth'])->name('insert_work');
Route::get('/work_delete/{id}',[Work_experience_controller::class,'work_delete'])->middleware(['auth'])->name('Delete_work');
Route::get('project',[Recent_work_Controller::class,'index'])->middleware(['auth'])->name('project');
Route::post('add_project',[Recent_work_Controller::class,'add_project'])->middleware(['auth'])->name('insert_project');
Route::get('/project_delete/{id}',[Recent_work_Controller::class,'project_delete'])->middleware(['auth'])->name('Delete_project');
Route::get('/artical',[Artical_Controller::class,'index'])->middleware(['auth'])->name('artical');
Route::post('add_artical',[Artical_Controller::class,'add_artical'])->middleware(['auth'])->name('insert_aritcal');
Route::get('/artical_delete/{id}',[Artical_Controller::class,'artical_delete'])->middleware(['auth'])->name('Delete_artical');


// Frontend Route


Route::get('/',[Index_Controller::class,'index']);


require __DIR__.'/auth.php';
