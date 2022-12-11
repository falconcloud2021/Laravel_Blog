<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {return view('welcome');});

Route::get('/index', [App\Http\Controllers\Blog\BlogShowController::class, 'indexPage'])->name('index');
Route::get('/blog', [App\Http\Controllers\Blog\BlogShowController::class, 'articlesPage'])->name('articles');
Route::get('/article', [App\Http\Controllers\Blog\BlogShowController::class, 'singleArticlePage'])->name('single');
// Route::get('/article/{id}', [App\Http\Controllers\Blog\BlogShowController::class, 'singleArticlePage'])->name('single');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/monitor', [App\Http\Controllers\Dashboard\MainController::class, 'indexPage'])->name('indexPage');
    // Route::resource('posts', [App\Http\Controllers\Dashboard\PostController::class]);
    Route::get('/posts', function () {return view('dashboard.post.articles-list');});
    Route::get('/createpost', function () {return view('dashboard.post.create-form-article');});
    Route::get('/showpost', function () {return view('dashboard.post.show-single-article');});
    Route::get('/editpost', function () {return view('dashboard.post.edit-form-article');});

    Route::get('/categories', function () {return view('dashboard.category.categories-list');});
});


Auth::routes();