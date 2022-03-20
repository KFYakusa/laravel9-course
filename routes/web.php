<?php
use App\Http\Controllers\{
    UserController
};
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

Route::get('/user',[UserController::class,'getAll'])->name('user.getAll');
Route::get('/user/create',[UserController::class, 'createPage'])->name('user.createPage');
Route::get('/user/{id}/edit',[UserController::class, 'editPage'])->name('user.editPage');
Route::patch('/user/{id}',[UserController::class, 'editUser'])->name('user.editUser');
Route::post('/user',[UserController::class, 'createUser'])->name('user.createUser');
Route::delete('user/{id}',[UserController::class,'deleteUser'])->name('user.deleteUser');
Route::get('/user/{id}',[UserController::class,'getUser'])->name('user.getUser');
