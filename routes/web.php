<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [Controller::class, 'index']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/gallery', [Controller::class, 'gallery']);
Route::get('/gallery-single', [Controller::class, 'gallery_single']);
Route::get('/services', [Controller::class, 'services']);
Route::get('/sample-inner-page', [Controller::class, 'sample_inner_page']);
