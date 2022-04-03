<?php

use App\Http\Controllers\About_us_Controller;
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

Route::get('about_us', [About_us_Controller::class,'index']);
Route::post('add_about',[About_us_Controller::class,'add_about_us']);

require __DIR__.'/auth.php';
