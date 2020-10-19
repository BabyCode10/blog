<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentListController;

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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/{slug}/detail', [WelcomeController::class, 'show'])->name('show');

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');

Route::get('/admin/home', [HomeController::class, 'index'])->name('home');

Route::delete('/admin/post/{slug}/delete', [PostController::class, 'destroy'])->name('post.destroy');
Route::put('/admin/post/{slug}/edit', [PostController::class, 'update'])->name('post.update');
Route::get('/admin/post/{slug}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::get('/admin/post/{slug}/show', [PostController::class, 'show'])->name('post.show');
Route::post('/admin/post/create', [PostController::class, 'store'])->name('post.store');
Route::get('/admin/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/admin/post', [PostController::class, 'index'])->name('post');

Route::get('/admin/comment-list', [CommentListController::class, 'index'])->name('comment-list');