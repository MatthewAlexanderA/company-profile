<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Logout;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\ContactController;


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

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('slider', SliderController::class)->middleware('auth');
Route::resource('service', ServiceController::class)->middleware('auth');
Route::resource('gallery', GalleryController::class)->middleware('auth');
Route::resource('testimonial', TestimonialController::class)->middleware('auth');
Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');

Route::resource('about', AboutController::class)->middleware('auth');
Route::resource('why', WhyController::class)->middleware('auth');
Route::resource('contact', ContactController::class)->middleware('auth');
