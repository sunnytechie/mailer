<?php

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

//DashboardController Route
Route::middleware('auth')->group(function () {
Route::get('/dashboard', [App\Http\Controllers\MailerController::class, 'index'])->name('index.home');
Route::get('/', [App\Http\Controllers\MailerController::class, 'index'])->name('index');
});

//CategoryController Route
Route::middleware('auth')->group(function () {
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
});

//EmailController Route
Route::middleware('auth')->group(function () {
Route::post('/email', [App\Http\Controllers\EmailController::class, 'email'])->name('email');
Route::get('/email/create', [App\Http\Controllers\EmailController::class, 'create'])->name('email.create');
Route::post('/email/store', [App\Http\Controllers\EmailController::class, 'store'])->name('email.store');
Route::get('/email/edit/{id}', [App\Http\Controllers\EmailController::class, 'edit'])->name('email.edit');
Route::post('/email/update/{id}', [App\Http\Controllers\EmailController::class, 'update'])->name('email.update');
Route::get('/email/delete/{id}', [App\Http\Controllers\EmailController::class, 'delete'])->name('email.delete');
});

//TodoController Route
Route::middleware('auth')->group(function () {
Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index'])->name('todo');
Route::get('/todo/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/store', [App\Http\Controllers\TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/delete/{id}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('todo.delete');

//MsgController Route
Route::get('/sent', [App\Http\Controllers\MsgController::class, 'index'])->name('msg.index');
//Delete Route
Route::get('/sent/delete/{id}', [App\Http\Controllers\MsgController::class, 'delete'])->name('msg.delete');
});

//File import Route
Route::middleware('auth')->group(function () {
    Route::post('import', [App\Http\Controllers\PeopleController::class, 'import'])->name('import');
    Route::get('export', [App\Http\Controllers\PeopleController::class, 'export'])->name('export');
});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'email'])->name('email.sent');


require __DIR__.'/auth.php';
