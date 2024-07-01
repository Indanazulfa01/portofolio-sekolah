<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', [HomepageController::class, 'index']);
Route::get('/visimisi', [HomepageController::class, 'visimisi']);
// Route::get('/galery', [HomepageController::class, 'galery']);
Route::get('/jurusan', [HomepageController::class, 'jurusan']);
Route::get('/alumni', [HomepageController::class, 'alumni']);
Route::get('/contactus', [HomepageController::class, 'contactus']);