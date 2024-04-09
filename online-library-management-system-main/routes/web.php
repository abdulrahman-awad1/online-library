<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowBookController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentBookController;
use App\Http\Controllers\StudentController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [SessionController::class, 'index']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);


Route::get('/signup', [RegisterUserController::class, 'create']);
Route::post('/signup', [RegisterUserController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/books', [BookController::class, 'index'])->middleware('auth');
Route::get('/books/create', [BookController::class, 'create'])->middleware('auth');
Route::post('/books', [BookController::class, 'store'])->middleware('auth');
Route::get('/books/{book}', [BookController::class, 'show'])->where(['book' => '[0-9]+'])->middleware('auth');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->where(['book' => '[0-9]+'])->middleware('auth');
Route::put('/books/{book}', [BookController::class, 'update'])->where(['book' => '[0-9]+'])->middleware('auth');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->where(['book' => '[0-9]+'])->middleware('auth');

Route::get('/borrowedbooks', [BorrowBookController::class, 'index'])->middleware('auth');

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/students/{student}', [StudentController::class, 'show'])->where(['student' => '[0-9]+'])->middleware('auth');

Route::get('/bookslibrary', [StudentBookController::class, 'index'])->middleware('auth');
Route::get('/search', [SearchController::class, 'search'])->name('search');


Route::get('/mybooks', [BorrowBookController::class, 'index'])->middleware('auth');
Route::post('/mybooks', [BorrowBookController::class, 'store'])->middleware('auth');
Route::get('/mybooks/{book}', [BorrowBookController::class, 'show'])->where(['book' => '[0-9]+'])->middleware('auth');
Route::delete('/mybooks/{book}', [BorrowBookController::class, 'destroy'])->where(['book' => '[0-9]+'])->middleware('auth');


