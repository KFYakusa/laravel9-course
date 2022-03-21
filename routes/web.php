<?php
use App\Http\Controllers\{
    UserController
};
use App\Http\Controllers\Admin\CommentController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

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

Route::get('/user',[UserController::class,'getlistUser'])->name('user.getListUser');
Route::get('/user/create',[UserController::class, 'createPage'])->name('user.createPage');
Route::get('/user/{id}/edit',[UserController::class, 'editPage'])->name('user.editPage');
Route::patch('/user/{id}',[UserController::class, 'editUser'])->name('user.editUser');
Route::post('/user',[UserController::class, 'createUser'])->name('user.createUser');
Route::delete('user/{id}',[UserController::class,'deleteUser'])->name('user.deleteUser');
Route::get('/user/{id}',[UserController::class,'getUser'])->name('user.getUser');

Route::get('/user/{id}/comments',[CommentController::class,'getListComment'])->name('comment.getListComment');
Route::get('/user/{id}/comments/create',[CommentController::class, 'createPage'])->name('comment.createPage');
Route::post('/user/{id}/comments',[CommentController::class, 'createComment'])->name('comment.createComment');
