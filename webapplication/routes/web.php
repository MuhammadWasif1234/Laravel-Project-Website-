<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');;

// // Route::get('/about/{name}/{id}', function ( string $name ,int $id ) {
// //     return view('about') ->with(compact('id','name'));
// // });

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');;


// Route::get('/form', function () {
//     return view('form');
// })->name('form');



// Route::get('/about', function () {
//     return view('about');
// })->name('about');


// Route::get('/nav', function () {
//     return view('nav');
// });

Route::get('/', [StudentController::class,'home'])->name('home');
Route::get('/f', [StudentController::class,'form'])->name('form');
Route::get('/a', [StudentController::class,'about'])->name('about');
Route::get('/b', [StudentController::class,'booking'])->name('booking');
Route::get('/m', [StudentController::class,'menu'])->name('menu');
Route::get('/s', [StudentController::class,'service'])->name('service');
Route::get('/t', [StudentController::class,'team'])->name('team');
Route::get('/te', [StudentController::class,'testimonial'])->name('testimonial');
Route::get('/c', [StudentController::class,'contact'])->name('contact');

