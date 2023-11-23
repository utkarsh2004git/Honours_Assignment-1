<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/book', function () {
//     return view('book');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/history', function () {
//     return view('history');
// });
Route::get('/', [MyController::class, 'DisplayHome']);
Route::get('/about', [MyController::class, 'DisplayAbout']);
Route::get('/book', [MyController::class, 'DisplayBooks']);
Route::get('/contact', [MyController::class, 'DisplayContact']);
Route::get('/history', [MyController::class, 'DisplayHistory']);



