<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegLogin;

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
Route::get('/addpost', [PostController::class, 'addPost'])->name('post.add');
Route::get('/postlist', [PostController::class, 'postList'])->name('post.list');
Route::post('/addingpost', [PostController::class, 'savePost'])->name('post.save');

Route::get('/editpost/{id}', [PostController::class, 'editPost'])->name('post.edit');
Route::get('/deletepost/{id}', [PostController::class, 'deletePost'])->name('post.delete');
Route::post('/deletepost', [PostController::class, 'updatePost'])->name('post.update');

//Registration
Route::get('/registration', [RegLogin::class, 'registration'])->name('register_page')->middleware('alreadyloggedin');
Route::post('/add-user', [RegLogin::class, 'adduser'])->name('reg.add');
Route::post('/login-user', [RegLogin::class, 'authenticate'])->name('reg.login');
Route::get('/login', [RegLogin::class, 'login'])->name('login_page')->middleware('alreadyloggedin');
Route::get('/dashboard', [RegLogin::class, 'dashboard'])->name('dashboard')->middleware('authcheck');
Route::get('/logout', [RegLogin::class, 'logout'])->name('logout');

