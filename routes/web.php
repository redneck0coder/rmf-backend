<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\MainController as AdminController;


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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware('auth')->prefix('admin')->group(function() {
	Route::get('/', [AdminController::class, 'index'])->name('admin.main');
	Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
	
	Route::resource('topics', TopicController::class);
	Route::resource('articles', ArticleController::class);
});

Route::get('/{topic_alias}', [MainController::class, 'topic'])->name('topic.main');
Route::get('/{topic_alias}/{article_alias}', [MainController::class, 'article'])->name('article.main');