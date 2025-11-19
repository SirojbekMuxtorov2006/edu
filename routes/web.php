<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'homePage']) ->name('home.page');
Route::get('/about', [PageController::class, 'aboutPage']) ->name('about.page');
Route::get('/contact', [PageController::class, 'contactPage']) ->name('contact.page');
Route::get('/news', [PageController::class, 'newsPage']) ->name('news.page');
Route::get('/gallery', [PageController::class, 'galleryPage']) ->name('gallery.page');
Route::get('/staff', [PageController::class, 'staffPage']) ->name('staff.page');

