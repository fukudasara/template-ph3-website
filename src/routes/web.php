<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\QuizController as QuizController;
use App\Http\Controllers\AdminController as AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('top');
    // .blade.phpは省略していいらしい
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth'])->name('admin.index');
Route::get('/admin/edit/{quizId}', [AdminController::class, 'edit'])->middleware(['auth'])->name('admin.edit');
Route::patch('/admin/update/{quizId}', [AdminController::class, 'update'])->middleware(['auth'])->name('admin.update');
Route::get('/admin/create/', [AdminController::class, 'create'])->middleware(['auth'])->name('admin.create');
Route::POST('/admin/store/', [AdminController::class, 'store'])->middleware(['auth'])->name('admin.store');
Route::delete('/admin/destroy/{quizId}', [AdminController::class, 'destroy'])->middleware(['auth'])->name('admin.destroy');
Route::get('/quizzes/{quizId}', [QuizController::class, 'show'])->name('quiz.show');
Route::delete('/quizzes/{quizId}', [QuizController::class, 'delete'])->name('quiz.delete');
Route::get('/quizzes/{quizId}/detail/{questionId}', [QuizController::class, 'detail'])->name('quiz.detail');
Route::get('/quizzes/{quizId}/edit/{questionId}', [QuizController::class, 'edit'])->name('quiz.edit');
Route::patch('/quizzes/{quizId}/update/{questionId}', [QuizController::class, 'update'])->name('quiz.update');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
